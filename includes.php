<?php

require __DIR__ . '/Config.php';
require __DIR__ . '/Model/DB.php';

require __DIR__ . '/Controller/AbstractController.php';
require __DIR__ . '/Controller/ErrorController.php';
require __DIR__ . '/Controller/HomeController.php';
require __DIR__ . '/Controller/CategoryController.php';

require __DIR__ . '/Model/Entity/AbstractEntity.php';
require __DIR__ . '/Model/Entity/Category.php';
require __DIR__ . '/Model/Entity/Comment.php';
require __DIR__ . '/Model/Entity/Role.php';
require __DIR__ . '/Model/Entity/Topic.php';
require __DIR__ . '/Model/Entity/User.php';

require __DIR__ . '/Routing/AbstractRouter.php';
require __DIR__ . '/Routing/HomeRouter.php';
require __DIR__ . '/Routing/CategoryRouter.php';
