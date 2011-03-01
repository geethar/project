<?php
// public/index.php

//show all errors
error_reporting(E_ALL);

//include all classes in 'lib/ directory
require_once '../lib/view.php';
require_once '../lib/config.php';
require_once '../lib/databaseaccess.php';

//set up config object
$config = new Config('../config.ini');

//set up view object with the config object and default layout/template
$view = new View($config);
$view->setLayoutFilename('default.html.php');
$view->setTemplateFilename('show.html.php');

//determine which page to use by looking at the uri
$uri = $_SERVER['REQUEST_URI'];
$uri = substr($uri, 1); //strip the leading slash

//grab the content out of the database
$db = new DatabaseAccess($config);
$result = $db->findOneBy('pages', 'uri', $uri);

//now that the view object has a template and a layout to render it in, we can call renderLayout()
$view->renderLayout($result);
