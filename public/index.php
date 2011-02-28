<?php
// public/index.php

//show all errors
error_reporting(E_ALL);

//include all classes in 'lib/ directory
require_once '../lib/view.php';
require_once '../lib/config.php';

//set up config object
$config = new Config('../config.ini');

//set up view object with the config object and default layout 
$view = new View($config);
$view->setLayoutFilename('default.html.php');

//determine which template file to load and set it on the view object
$uri = $_SERVER['REQUEST_URI'];
$templateFilename = substr($uri, 1) . '.php';
$view->setTemplateFilename($templateFilename);

//now that the view object has a template and a layout to render it in, we can call renderLayout()
$view->renderLayout();
