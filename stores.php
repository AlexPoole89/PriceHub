<?php
// fake $app, $log so that Netbeans can provide suggestions while typing code
if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

$app->get('/stores/add', function() use($app, $log){
    $app->render('stores_addedit.html.twig');
});


// ADD/EDIT SUBMISSION
$app->post('/stores/:op(/:id)', function($op, $id = -1) use ($app, $log) {
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
    $longitude = 
    $latitude =
    $productImage = array();
//
    $values = array('name' => $name, 'picPath' => $picPath, 'comment' => $comment);
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
            if(strstr($productImage['name'], '..')){
                array_push($errorList, "Invalid file name");
                $log->warn("Uploaded file name with .. in it (possible attack) " . print_r($productImage, true));
            }
            //TODO: CHECK IF FILE ALREADY EXISTS, CHECK MAXIMUM SIZE OF THE FILE, DIMENSIONS OF THE IMAGE, ETC.
            $info = getimagesize($productImage["tmp_name"]);
            if ($info == FALSE) {
                array_push($errorList, "File doesn't look like a valid image.");
            } else {
                   //CHECK IMAGE SIZE, 
                if (filesize($profileImage["tmp_name"]) > 200000) {
                    array_push($errorList, "Image must be smaller than 20kb.");
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
        $app->render('todo_addedit.html.twig', array(
            'errorList' => $errorList,
            'v' => $values));
    } else { //2. successful submission
         if($productImage){ //   '[^a-zA-Z0-9_\.-]' 
       // $sanitizedFileName = preg_replace('[^a-zA-Z0-9_\.-]', '_', $todoImage['name']);
        $picPath = 'uploads/' . $productImage['name'];  // $todoImage['name']
        if (!move_uploaded_file($productImage['tmp_name'], $imagePath)){
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
            $row = DB::queryFirstRow("SELECT * FROM products WHERE id=%i", $id);
            if ($row['userId'] == $_SESSION['user']['id']) {
                DB::update('products', $values, "id=%i", $id);
            } else { //access denied
                $app->render('access_denied.html.twig');
                return;
            }
        } else {
//INSERT STATEMENT
            DB::insert('products', array('userId' => $_SESSION['user']['id'], 'name' => $name, 'comment' => $comment, 'picPath' => $picPath));
        }
        $app->render('todo_addedit_success.html.twig', array('isEditing' => ($id != -1)));
    }
})->conditions(array(
    'op' => ('edit|add'),
    'id' => '\d+'
));


//
//DELETE PRODUCT
// PRODUCT DELETE FIRST SHOW
$app->get('/delete/:id', function($id) use ($app) {
//VERIFY USER MATCHES ORIGINAL product adder
    $product = DB::queryFirstRow("SELECT * FROM products WHERE id=%i", $id);
    if (!$_SESSION['user'] || $product['userId'] != $_SESSION['user']['id']) {
        $app->render('access_denied.html.twig');
        return;
    }
    if (!$todo) {
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
    if (DB::affectedRows() == 0) {
        $app->render('not_found.html.twig');
    } else {
        $app->render('todo_delete_success.html.twig');
    }
});
//




