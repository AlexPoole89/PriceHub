<?php

// fake $app, $log so that Netbeans can provide suggestions while typing code
if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

$app->get('/stores/add', function() use($app, $log) {
    $app->render('stores_addedit.html.twig');
});

$app->get('//:op(/:id)', function($op, $id = -1) use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
//
    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        $app->render('error_internal.html.twig');
        return;
    }
//
    if ($id != -1) {
        $values = DB::queryFirstRow("SELECT * FROM todos WHERE id=%i", $id);
        if (!$values) {
            $app->render('error_internal.html.twig');
        return;
        }
    } else {// nothing to load from database - adding
        $values = array();
    }
    $app->render('todo_addedit.html.twig', array(
        'v' => $values,
        'isEditing' => ($id != -1)
    ));
})->conditions(array(
    'op' => ('edit|add'),
    'id' => '\d+'
));

// ADD/EDIT SUBMISSION
$app->post('/stores/:op(/:id)', function($op, $id = -1) use ($app, $log) {
//    if (!$_SESSION['user']) {
//        $app->render('access_denied.html.twig');
//        return;
//    }
    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        $app->render('error_internal.html.twig');
        return;
    }
//
//extract submission
    $name = $app->request()->post('name');
    //$address
    $longitude = $app->request()->post('longitude');
    $latitude = $app->request()->post('latitude');
    $storeImage = array();
//
    $values = array('name' => $name, 'longitude' => $longitude, 'latitude' => $latitude, 'storeImage' => $storeImage);
    $errorList = array();
//
    if (strlen($name) < 1 || strlen($name) > 100) {
        array_push($errorList, "Name must be between 1 and 100 characters.");
        $values['name'] = '';
    }

    //STORE IMAGE CHECK
    if ($_FILES['storeImage']['error'] != UPLOAD_ERR_NO_FILE) {
        $storeImage = $_FILES['storeImage'];
        //check for errors
        if ($storeImage['error'] != 0) {
            array_push($errorList, "Error uploading file.");
            $log->err("Error uploading file: " . print_r($storeImage, true));
        } else {
            if (strstr($storeImage['name'], '..')) {
                array_push($errorList, "Invalid file name");
                $log->warn("Uploaded file name with .. in it (possible attack) " . print_r($storeImage, true));
            }
            // check if image if valid 
            $info = getimagesize($storeImage["tmp_name"]);
            if ($info == FALSE) {
                array_push($errorList, "File doesn't look like a valid image.");
            } else {
                //CHECK IMAGE SIZE, 
                if (filesize($storeImage["tmp_name"]) > 200000) {
                    array_push($errorList, "Image must be smaller than 20kb.");
                }
                //CHECK IMAGE DIMENSIONS
//                if ($info[0] > 300 || $info[1] > 300) {
//                    array_push($errorList, "Image must not be bigger than 300x300 pixels.");
//                }
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
            array_push($errorList, "Image is required when adding a new store.");
        }
    }
//
    if ($errorList) { // 3. failed submission
        $app->render('stores_addedit.html.twig', array(
            'errorList' => $errorList,
            'v' => $values));
    } else { //2. successful submission
        if ($storeImage) { //   '[^a-zA-Z0-9_\.-]' 
           // $sanitizedFileName = preg_replace('[^a-zA-Z0-9_\.-]', '_', $storeImage['name']);
            $logoPath = 'uploads/' . $storeImage['name'];  // $storeImage['name']
            if (!move_uploaded_file($storeImage['tmp_name'], $logoPath)) {
                $log->err(sprintf("Error moving uploaded file: " . print_r($storeImage, true)));
                $app->render('error_internal.html.twig');
                return;
            }
            //TODO: if EDITING and new file is uploaded we should delete the old one in uploads
            $values['logoPath'] = "/" . $logoPath;
        }
//UPDATE
        if ($id != -1) {
//VERIFY USER MATCHES ORIGINAL STORE ADDER
            $row = DB::queryFirstRow("SELECT * FROM stores WHERE id=%i", $id);
            if ($row['userId'] == $_SESSION['user']['id']) {
                DB::update('stores', $values, "id=%i", $id);
            } else { //access denied
                $app->render('access_denied.html.twig');
                return;
            }
        } else {
//INSERT STATEMENT
            DB::insert('stores', array('userId' => 1, 'name' => $name, 'longitude' => $longitude, 'latitude' => $latitude, 'logoPath' => $values['logoPath']));
        }
        $app->render('stores_addedit_success.html.twig', array('v' => $values, 'isEditing' => ($id != -1)));
    }
})->conditions(array(
    'op' => ('edit|add'),
    'id' => '\d+'
));


//
//DELETE STORE
// STORE DELETE FIRST SHOW
$app->get('/stores/delete/:id', function($id) use ($app) {
//VERIFY USER MATCHES ORIGINAL store adder
    $store = DB::queryFirstRow("SELECT * FROM stores WHERE id=%i", $id);
    if (!$_SESSION['user'] || $store['userId'] != $_SESSION['user']['id']) {
        $app->render('access_denied.html.twig');
        return;
    }
    if (!$store) {
        $app->render('not_found.html.twig');
        return;
    }
    $app->render('products_delete.html.twig', array('s' => $store));
});


//DELETE FORM SUBMISSION
$app->post('/stores/delete/:id', function($id) use ($app) {
//VERIFY USER MATCHES ORIGINAL TO-DO WRITER
    $row = DB::queryFirstRow("SELECT * FROM stores WHERE id=%i", $id);
    if (!$_SESSION['user'] || $_SESSION['user']['id'] != $row['userId']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $confirmed = $app->request()->post('confirmed');
    if ($confirmed != 'true') {
        $app->render('not_found.html.twig');
        return;
    }
    //delete store from database
    DB::delete('stores', "id=%i", $id);
    if (DB::affectedRows() == 0) {
        $app->render('not_found.html.twig');
    } else {
        $app->render('stores_delete_success.html.twig');
    }
});
//
//
//LIST ALL STORES
$app->get('/stores/list', function() use($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $storeList = DB::query("SELECT * FROM stores WHERE stores.userId=users.id");
    $app->render('stores_list.html.twig', array('list' => $storeList));
});


//STORE PROFILE
$app->get('/stores/store/:id', function($id = -1) use($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $store = DB::queryFirstRow("SELECT * FROM stores WHERE id=%i", $id);
    $app->render('stores_list.html.twig', array('store' => $store));
});

