<?php

use PIC\Controller\ArticleController;
use PIC\Routing;
use RedBeanPHP\R;
use PIC\Controller\HomeController;
use Symfony\Component\ErrorHandler\Debug;

require_once __DIR__ . '/../vendor/autoload.php';
require '../Routing.php';


R::setup('mysql:host=localhost;dbname=twigadmin', 'dev', 'dev');
Debug::enable();
Routing::route();