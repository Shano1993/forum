<?php

use App\Controller\ErrorController;
use App\Routing\CategoryRouter;
use App\Routing\HomeRouter;

require __DIR__ . '/../includes.php';
session_start();

$page = isset($_GET['c']) ? \App\Routing\AbstractRouter::secured($_GET['c']) : 'home';
$method = isset($_GET['a']) ? \App\Routing\AbstractRouter::secured($_GET['a']) : 'index';

switch ($page) {
    case 'home':
        HomeRouter::route($method);
        break;
    case 'category':
        CategoryRouter::route($method);
        break;
    default:
        (new ErrorController())->error404($page);
}
