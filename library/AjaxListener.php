<?php
include_once "../vendor/autoload.php";

if(isset($_REQUEST['controller'])){
    $controller= $_REQUEST['controller'];
    $action = $_REQUEST['action'];
    $params = $_REQUEST['dataToSend'];
    $class = ucfirst($controller)."AjaxController";
    $obj = new $class;
    echo $obj->$action($params);
}
