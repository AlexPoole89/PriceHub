<?php

// fake $app, $log so that Netbeans can provide suggestions while typing code
if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

//products add/edit first show
$app->get('/products/:op(/:id)', function($op, $id = -1) use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }

    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        $app->render('error_internal.html.twig');
        return;
    }
//
    if ($id != -1) {
        $values = DB::queryFirstRow("SELECT * FROM products WHERE id=%i", $id);
        if (!$values) {
            $app->render('error_internal.html.twig');
            return;
        }
    } else {// nothing to load from database - adding
        $values = array();
    }
    $app->render('products_addedit.html.twig', array(
        'v' => $values,
        'isEditing' => ($id != -1)
    ));
})->conditions(array(
    'op' => ('edit|add'),
    'id' => '\d+'
));
//
// PRODUCTS ADD/EDIT SUBMISSION
$app->post('/products/:op(/:id)', function($op, $id = -1) use ($app, $log) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        $app->render('error_internal.html.twig');
        return;
    }
//
//extract submission
    $name = $app->request()->post('name');
    $productImage = "";
    $comment = $app->request()->post('comment');
//
    $values = array('name' => $name, 'comment' => $comment);
    $errorList = array();
//
    if (strlen($name) < 1 || strlen($name) > 100) {
        array_push($errorList, "name must be between 1 and 100 characters.");
        $values['name'] = '';
    }

    // comment validation
    if (strlen($comment) < 10 || strlen($name) > 500) {
        array_push($errorList, "Comment must be between 10 and 500 characters.");
        $values['comment'] = '';
    }


    //PRODUCT IMAGE CHECK
    if ($_FILES['productImage']['error'] != UPLOAD_ERR_NO_FILE) {
        $productImage = $_FILES['productImage'];
        //check for errors
        if ($productImage['error'] != 0) {
            array_push($errorList, "Error uploading file.");
            $log->err("Error uploading file: " . print_r($productImage, true));
        } else {
            if (strstr($productImage['name'], '..')) {
                array_push($errorList, "Invalid file name");
                $log->warn("Uploaded file name with .. in it (possible attack) " . print_r($productImage, true));
            }
            //TODO: CHECK IF FILE ALREADY EXISTS, CHECK MAXIMUM SIZE OF THE FILE, DIMENSIONS OF THE IMAGE, ETC.
            $info = getimagesize($productImage["tmp_name"]);
            if ($info == FALSE) {
                array_push($errorList, "File doesn't look like a valid image.");
            } else {
                //CHECK IMAGE SIZE, 
                if (filesize($productImage["tmp_name"]) > 400000) {
                    array_push($errorList, "Image must be smaller than 40kb.");
                }
                //CHECK IMAGE DIMENSIONS
                if ($info[0] > 300 || $info[1] > 300) {
                    array_push($errorList, "Image must not be bigger than 300x300 pixels.");
                }
                //check valid file type
                if ($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/png' || $info['mime'] == 'image/gif') {
                    //image type is valid- all good
                } else {
                    array_push($errorList, "Image must be a JPG, GIF, or PNG only.");
                }
            }
        }
    } else { //no file uploaded
        if ($op == 'add') {
            array_push($errorList, "Image is required when creating new product.");
        }
    }
//
    if ($errorList) { // 3. failed submission
        $app->render('products_addedit.html.twig', array(
            'errorList' => $errorList,
            'v' => $values));
    } else { //2. successful submission
        //
         $product = DB::queryFirstRow("SELECT * FROM products WHERE id=%i", $id);
        //
        if ($productImage) {
            $ext = '';
            switch ($info['mime']) {
                case "image/gif":
                    $ext = '.gif';
                    break;
                case "image/jpeg":
                    $ext = '.jpg';
                    break;
                case "image/png":
                    $ext = '.png';
                    break;
                case "image/bmp":
                    $ext = '.bmp';
                    break;
            }
            $picPath = getUniqueFileNameForExtension('uploads/', $ext);  // 'uploads/' . $productImage['name'] write new file name with function 
            if (!move_uploaded_file($productImage['tmp_name'], $picPath)) {
                $log->err(sprintf("Error moving uploaded file: " . print_r($productImage, true)));
                $app->render('error_internal.html.twig');
                return;
            }
            //TODO: if EDITING and new file is uploaded we should delete the old one in uploads
            $values['picPath'] = "/" . $picPath;
        }
//UPDATE
        if ($id != -1) {
//VERIFY USER MATCHES ORIGINAL TO-DO WRITER

            if ($product['userId'] == $_SESSION['user']['id']) {
                unlink('.' . $product['picPath']);
                $values['picPath'] = "/" . $picPath;
                DB::update('products', $values, "id=%i", $id);
            } else { //access denied
                $app->render('access_denied.html.twig');
                return;
            }
        } else {
//INSERT STATEMENT             // 1 FOR TESTING CHANGE BACK TO $_SESSION['user']['id']
            DB::insert('products', array('userId' => $_SESSION['user']['id'], 'name' => $name, 'comment' => $comment, 'picPath' => $values['picPath']));
            $values = DB::queryFirstRow("SELECT * FROM products ORDER BY id DESC");
        }
        $app->render('products_addedit_success.html.twig', array('v' => $values, 'isEditing' => ($id != -1)));
    }
})->conditions(array(
    'op' => ('edit|add'),
    'id' => '\d+'
));


//
//DELETE PRODUCT
// PRODUCT DELETE FIRST SHOW
$app->get('/products/delete/:id', function($id) use ($app) {
//VERIFY USER MATCHES ORIGINAL product adder
    $product = DB::queryFirstRow("SELECT * FROM products WHERE id=%i", $id);
    if (!$_SESSION['user'] || $product['userId'] != $_SESSION['user']['id']) {
        $app->render('access_denied.html.twig');
        return;
    }
    if (!$product) {
        $app->render('not_found.html.twig');
        return;
    }
    $app->render('products_delete.html.twig', array('p' => $product));
});


//DELETE FORM SUBMISSION
$app->post('/products/delete/:id', function($id) use ($app) {
//VERIFY USER MATCHES ORIGINAL TO-DO WRITER
    $row = DB::queryFirstRow("SELECT * FROM products WHERE id=%i", $id);
    if (!$_SESSION['user'] || $_SESSION['user']['id'] != $row['userId']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $confirmed = $app->request()->post('confirmed');
    if ($confirmed != 'true') {
        $app->render('not_found.html.twig');
        return;
    }
    DB::delete('products', "id=%i", $id);
    DB::delete('prices', 'productId=%i', $id);
    if (DB::affectedRows() == 0) {
        $app->render('not_found.html.twig');
    } else {
        $app->render('product_delete_success.html.twig');
    }
});
//
//
//LIST ALL PRODUCTS
$app->get('/products/list', function() use($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }                                               //  WHERE products.userId=users.id
    $productsList = DB::query("SELECT * FROM products");
    $app->render('products_list.html.twig', array('list' => $productsList));
});


//PRODUCT PROFILE
$app->get('/products/view/:id', function($id = -1) use($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $pricesCountProduct = DB::queryFirstField("SELECT count(id) FROM prices WHERE productId=%i", $id);
    $product = DB::queryFirstRow("SELECT products.name as prodName, products.id as id, users.name as username, products.barcode as barcode,"
                    . " products.comment as comment, products.picPath as picPath FROM products, users WHERE products.userId=users.id AND products.id=%i", $id);

    //get user's location to search for nearest stores
    $long = $app->request()->post('long');
    $lat = $app->request()->post('lat');
    $nearbyStores = DB::query("SELECT name,
    latitude, longitude, distance
    FROM (
    SELECT z.name,
    z.latitude, z.longitude,
    p.radius,
    p.distance_unit
    * DEGREES(ACOS(COS(RADIANS(p.latpoint))
    * COS(RADIANS(z.latitude))
    * COS(RADIANS(p.longpoint - z.longitude))
    + SIN(RADIANS(p.latpoint))
    * SIN(RADIANS(z.latitude)))) AS distance
    FROM stores AS z
    JOIN (
    SELECT 45.447277 AS latpoint, -73.617004 AS longpoint,
    15.0 AS radius, 69.0 AS distance_unit
    ) AS p ON 1 = 1
    WHERE z.latitude
    BETWEEN p.latpoint - (p.radius / p.distance_unit)
    AND p.latpoint + (p.radius / p.distance_unit)
    AND z.longitude
    BETWEEN p.longpoint - (p.radius / (p.distance_unit * COS(RADIANS(p.latpoint))))
    AND p.longpoint + (p.radius / (p.distance_unit * COS(RADIANS(p.latpoint))))
    ) AS d
    WHERE distance <= radius
    ORDER BY distance
    LIMIT 15");
    $app->render('products_view.html.twig', array('p' => $product,
        'price' => $pricesCountProduct, 'nearbyStores' => $nearbyStores
    ));
})->conditions(array(
    'id' => '\d+'
));
