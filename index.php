<?php 
require_once 'model/Conexion.php';
$controller = 'index';

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['controller'])){
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller).'Controller'; // ucword convierte en mayuscula la primera letra
    $controller = new $controller; // Instanciamos una clase del controlador;
    $controller->index();    
}
else{
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['controller']);
    $accion = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
    
    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // Llamamos a la acción
    call_user_func( array( $controller, $accion ) );
}