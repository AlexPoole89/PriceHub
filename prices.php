<?php

// fake $app, $log so that Netbeans can provide suggestions while typing code
if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

$app->get('/pricelist', function() use ($app) {
    $app->render('pricelist.html.twig');
});

//add a price
$app->get('/priceadd', function() use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $app->render('priceadd.html.twig');
});

$app->post('/priceadd', function() use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $storeName = $app->request()->post('store');
    $productName = $app->request()->post('product');
    $price = $app->request()->post('price');
    $onSpecial = $app->request()->post('onSpecial');
    $unit = $app->request()->post('unit');
    $lat = $app->request()->post('lat');
    $long = $app->request()->post('long');

    $values = array('store' => $storeName, 'product' => $productName, 'price' => $price, 'onSpecial' => $onSpecial, 'unit' => $unit, 'lat'=>$lat,'long'=>$long);
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
        $app->render('priceadd.html.twig', array(
            'errorList' => $errorList,
            'v' => $values));
    } else {
        // 2. successful submission
//check if product exists
        
        $product = DB::queryFirstRow('SELECT * FROM products WHERE name=%s', $productName);
        if (!$product) {
            $product = DB::insert('products', array('name' => $productName, 'userId' => $_SESSION['user']['id']));
        }
        $product = DB::queryFirstRow('SELECT * FROM products WHERE name=%s', $productName);
        $productId = $product['id'];

        //check if store exists
        $store = DB::queryFirstRow('SELECT * FROM stores WHERE name=%s', $storeName);
        if (!$store) {
            $store = DB::insert('stores', array('name' =>$storeName, 'userId' =>$_SESSION['user']['id'], 'longitude'=>$long, 'latitude'=>$lat));
        }
        $store = DB::queryFirstRow('SELECT * FROM stores WHERE name=%s', $storeName);
        $storeId = $store['id'];

        DB::insert('prices', array('storeId' => $storeId, 'productId' => $productId, 'price' => $price, 'onSpecial' => $onSpecial, 'unit' => $unit, 'userId' => $_SESSION['user']['id']));

        $app->render('register_success.html.twig', array());
    }
});

//delete a price

$app->get('/delete/:id', function($id) use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $price = DB::queryFirstRow('SELECT * FROM prices WHERE id=%d', $id);
    if (!$price) {
        $app->render('admin_not_found.html.twig');
        return;
    }
    $app->render('admin_products_delete.html.twig', array('p' => $product));
});

$app->post('/delete/:id', function($id) use ($app) {
    if (!$_SESSION['user']) {
        $app->render('access_denied.html.twig');
        return;
    }
    $confirmed = $app->request()->post('confirmed');
    if ($confirmed != 'true') {
        $app->render('admin/not_found.html.twig');
        return;
    }
    DB::delete('products', "id=%i", $id);
    if (DB::affectedRows() == 0) {
        $app->render('admin_not_found.html.twig');
    } else {
        $app->render('admin_products_delete_success.html.twig');
    }
});
