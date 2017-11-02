<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

session_start();

require_once 'vendor/autoload.php';

DB::$user = 'slimshop';
DB::$password = 'FYcIUsxlc3l20rHZ';
DB::$dbName = 'slimshop';
DB::$encoding = 'utf8';

//DB ERROR HANDLING
DB::$error_handler = 'sql_error_handler';
db::$nonsql_error_handler = 'non_sql_error_handler';

//SQL ERROR HANDLING FUNCTION
function sql_error_handler($params) {
  global $app, $log;
  $app->render('error_internal.html.twig');
  $log->err("Error: " . $params['error']);
  $log->err("Query: " . $params['query']);
  http_response_code(500);
  die; // don't want to keep going if a query broke
}
 //
function non_sql_error_handler($params) {
  global $app, $log;
  $app->render('error_internal.html.twig');
  $log->err("Error: " . $params['error']);
   http_response_code(500);
  die; // don't want to keep going if a query broke
}

// Slim creation and setup
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
        ));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);
$view->setTemplatesDirectory(dirname(__FILE__) . '/templates');

// create a log channel
$log = new Logger('main');
$log->pushHandler(new StreamHandler('logs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler('logs/errors.log', Logger::ERROR));


if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
}
//
//URL/EVENT HANDLERS GO HERE 
//
$app->run();

