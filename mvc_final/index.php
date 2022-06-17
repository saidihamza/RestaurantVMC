<?php

$view_path = 'www/view';
$requestUrl = $_SERVER['SCRIPT_NAME']; //chemin absolut
 //chemin url

$wwwUrl = str_replace('index.php', 'www', $_SERVER['SCRIPT_NAME']);
///restaurant/mvc_final/www"
include 'library/Database.class.php';

spl_autoload_register(function ($class) {
    if (substr($class, -10) == 'Controller') {

        $filename =  'controller/' . $class . '.class.php';
        $filename =  'controller/' . $class . '.class.php';
        //var_dump($filename);
    } else {
        $filename = 'model/' . $class . '.class.php';
    }

    if (file_exists($filename)) {
        include $filename;
    } else {
        echo 'fichier non existant ';
        exit();
    }
});

if (isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] != '/') {

    $pathInfo = $_SERVER['PATH_INFO'];//apres / dans url
   // var_dump($pathInfo);
    $path = substr($pathInfo, 1);
    $path = strtolower($path);
    $path = ucfirst($path);
} else {
    $path = "Home";
}
$controllerClass = $path . 'Controller';
$queryFields = $_GET;//tous ce qui dans url est get qcq avec form ou nn
//var_dump($queryFields);
$controller = new $controllerClass();
$variables = $controller->httpGetMethod($queryFields);
extract($variables);
var_dump($variables);
$page =  $view_path.'/'.$path.'View.phtml';
//www/view/MealView.phtml
include $view_path.'/layout.phtml';

