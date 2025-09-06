<?php
require_once "config/autoload.php";

$controller = new Controller;

$action = $_GET["action"] ?? "home";

$method = "get" . ucfirst($action) . "Page";

if (method_exists($controller, $method)) {
    $controller->$method();
} else {
    $controller->getNotFoundPage();
}