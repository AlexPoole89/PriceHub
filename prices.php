<?php

// fake $app, $log so that Netbeans can provide suggestions while typing code
if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

$app->get('/price/list', function() use ($app) {
     if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    //
    
    $productsList = DB::query("SELECT stores.name AS storeName, products.name AS productName, price,unit,onSpecial FROM prices LEFT JOIN stores ON prices.storeId = stores.id LEFT JOIN products ON prices.productId = products.id");
    $app->render('pricelist.html.twig', array('list' => $productsList,'storeName'=>$storeName,'productName' =>$productName));
});

//add/edit a price

$app->get('/price/:op(/:id)', function($op, $id = -1) use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        echo "INVALID REQUEST"; // FIXME on Monday - display standard 404 from slim
        return;
    }
    //
    if ($id != -1) {
        $values = DB::queryFirstRow('SELECT * FROM prices WHERE id=%i', $id);
        if (!$values) {
            echo "NOT FOUND";  // FIXME on Monday - display standard 404 from slim
            return;
        }
    } else { // nothing to load from database - adding
        $values = array();
    }
    $app->render('price_addedit.html.twig', array(
        'v' => $values,
        'isEditing' => ($id != -1)
    ));
})->conditions(array(
    'op' => '(edit|add)',
    'id' => '\d+'
));


$app->post('/price/:op(/:id)', function($op, $id = -1) use ($app, $log) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    if (($op == 'add' && $id != -1) || ($op == 'edit' && $id == -1)) {
        $app->render('error_internal.html.twig');
        return;
    }
    $storeName = $app->request()->post('store');
    $productName = $app->request()->post('product');
    $price = $app->request()->post('price');
    $onSpecial = $app->request()->post('onSpecial');
    $quantity = $app->request()->post('quantity');
    $unit = $app->request()->post('unit');
    $lat = $app->request()->post('lat');
    $long = $app->request()->post('long');

    $values = array('store' => $storeName, 'product' => $productName, 'price' => $price, 'onSpecial' => $onSpecial,'quantity'=>$quantity, 'unit' => $unit, 'lat' => $lat, 'long' => $long);
    $errorList = array();

    if (isset($onSpecial)) {
        $onSpecial = 1; //true
    } else {
        $onSpecial = 0; //false
    }

    if (empty($price) || $price < 0 || $price > 99999999.99) {
        $values['price'] = '';
        array_push($errorList, "Price must be between 0 and 99999999.99");
    }

    if (strlen($storeName) < 2 || strlen($storeName) > 50) {
        array_push($errorList, "Store must be between 2 and 50 characters");
    }

    if (strlen($productName) < 2 || strlen($productName) > 50) {
        array_push($errorList, "Product must be between 2 and 50 characters");
    }

    if ($errorList) {
        // 3. failed submission
        $app->render('price_addedit.html.twig', array(
            'errorList' => $errorList,
            'v' => $values));
    } else {
        // 2. successful submission
//check if product exists
        if ($id != -1) {

            DB::insert('prices', array('storeId' => $storeId, 'productId' => $productId, 'price' => $price, 'onSpecial' => $onSpecial,'quantity'=>$quantity,'unit' => $unit, 'userId' => $_SESSION['user']['id']), "id=%i", $id);
        } else {
            $product = DB::queryFirstRow('SELECT * FROM products WHERE name=%s', $productName);
            if (!$product) {
                $product = DB::insert('products', array('name' => $productName, 'userId' => $_SESSION['user']['id']));
            }
            $productId = $product['id'];

            //check if store exists
            $store = DB::queryFirstRow('SELECT * FROM stores WHERE name=%s', $storeName);
            if (!$store) {
                $store = DB::insert('stores', array('name' => $storeName, 'userId' => $_SESSION['user']['id'], 'longitude' => $long, 'latitude' => $lat));
            }
            $storeId = $store['id'];


            DB::insert('prices', array('storeId' => $storeId, 'productId' => $productId, 'price' => $price, 'onSpecial' => $onSpecial,'quantity'=>$quantity,'unit' => $unit, 'userId' => $_SESSION['user']['id']));
        }
        $app->render('price_addedit_success.html.twig', array('isEditing' => ($id != -1)));
    }
})->conditions(array(
    'op' => '(edit|add)',
    'id' => '\d+'
));

//delete a price

$app->get('/price/delete/:id', function($id) use ($app) {
     $priceDelete = DB::queryFirstRow("SELECT * FROM prices WHERE id=%i", $id);
    if (!$_SESSION['user'] || $_SESSION['user']['id'] != $priceDelete['userId']) {
        $app->render('access_denied.html.twig');
        return;
    } 
        
    $price = DB::queryFirstRow('SELECT * FROM prices WHERE id=%d', $id);
    if (!$price) {
        $app->render('admin_not_found.html.twig');
        return;
    }
    $app->render('price_delete.html.twig', array('p' => $product));
});

$app->post('/price/delete/:id', function($id) use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $confirmed = $app->request()->post('confirmed');
    if ($confirmed != 'true') {
        $app->render('not_found.html.twig');
        return;
    }
    DB::delete('prices', "id=%i", $id);
    if (DB::affectedRows() == 0) {
        $app->render('not_found.html.twig');
    } else {
        $app->render('price_delete_success.html.twig');
    }
});
