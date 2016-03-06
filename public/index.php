<?php

use duncan3dc\Laravel\Blade;
use duncan3dc\Laravel\BladeInstance;

include '../vendor/autoload.php';
//include_once "index.html";

$blade = new BladeInstance(dirname(__DIR__)."/views", dirname(__DIR__)."/cache/views");


$brandController = new BrandsController();
$array = $brandController->getBrands();

$params = ['array'=> $array];

header ('Test: test');

echo $blade->render("main", $params);
