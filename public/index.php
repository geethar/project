<?php
// public/index.php

error_reporting(E_ALL);

ini_set('display_errors', 1);

require '../lib/view.php';
require '../lib/config.php';

$config = new Config('../config.ini');

$view = new View($config);

//echo "The following is a dump of the view object:";
//var_dump($view); echo "<br /><br />";

$uri = $_SERVER['REQUEST_URI'];

$templateFilename = substr($uri, 1) . '.php';

//echo "templateFilename is " . $templateFilename . "<br /><br />";

if (is_readable($templateFilename)) {
    $view->setTemplateFilename($templateFilename);
} 

else {
    header("HTTP/1.0 404 Not Found");
    $view->setTemplateFilename('../site/view/pages/404.html.php');
}

$view->setLayoutFilename('default.html.php');

//$layoutname_check = $view->getLayoutFilename();
//echo "layoutFilename is" . $layoutname_check . "<br /><br />";

$view->renderLayout();
    
?>
