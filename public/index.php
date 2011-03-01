<?php
// public/index.php

error_reporting(E_ALL);

ini_set('display_errors', 1);

require '../lib/view.php';

echo "First time";

$view = new View();
echo "Second time";

$uri = $_SERVER['REQUEST_URI'];
echo "Third time";

$templateFilename = '../site/view/pages/' . substr($uri, 1) . '.php';
//
//$view->setLayoutFilename('../site/view/layouts/default.html.php');
//
//if (is_readable($templateFilename)) {
//    $view->setTemplateFilename($templateFilename);
//} else {
//    header("HTTP/1.0 404 Not Found");
//    $view->setTemplateFilename('../site/view/pages/404.html.php');
//}
//    $view->render();
    
?>
