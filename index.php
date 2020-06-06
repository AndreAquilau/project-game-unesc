<?php

require __DIR__."/vendor/autoload.php";
require __DIR__."/Source/config/global.php";
require __DIR__."/Source/functions/functions.php";

use Source\core\Controller;

$controller = new Controller(URL_BASE);

$controller->useRoutes();

$controller->on();