<?php


require $BASE_DIR . 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable($BASE_DIR);
$dotenv->safeLoad();

require $BASE_DIR . 'config/config.php';
require $BASE_DIR . 'database/model.php';


use \Slim\Factory\AppFactory;
$app = AppFactory::create();
$app->setBasePath('/slim');

$app->addBodyParsingMiddleware();
$app->addRoutingMiddleware();
