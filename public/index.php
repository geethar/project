<?php
// public/index.php

error_reporting(E_ALL);

ini_set('display_errors', 1);

require '../lib/view.php';
require '../lib/config.php';

$config = new Config('../config.ini');

$view = new View($config);

$uri = $_SERVER['REQUEST_URI'];

$templateFilename = substr($uri, 1) . '.php';

$view->setTemplateFilename($templateFilename);

$view->setLayoutFilename('default.html.php');

$view->renderLayout();
    
?>
