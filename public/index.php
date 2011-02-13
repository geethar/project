<?php
require '../lib/view.php';

//determine which page we'll be rendering
$uri = $_SERVER['REQUEST_URI'];
$templateFilename = '../site/view/pages/' . substr($uri, 1) . '.php';

//initialize a view object and set the layout filename
$view = new View();
$view->setLayoutFilename('../site/view/layouts/default.php');

//if the template file isn't found, show a 404 message and header
if (is_readable($templateFilename)) {
    $view->setTemplateFilename($templateFilename);
} else {
    header("HTTP/1.0 404 Not Found");
    $view->setTemplateFilename('../site/view/pages/404.html.php');
}
    $view->render();
