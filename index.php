<?php

require_once './controller/controller.php';

$controller = new Controller();

if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
    $action = $_GET['action'];
    $controller->$action();
} else {
    $controller->index();
}


