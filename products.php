<?php
// fake $app, $log so that Netbeans can provide suggestions while typing code
if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

$app->get('/products/add', function() use($app, $log){
    $app->render('products_addedit.html.twig');
});

