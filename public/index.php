<?php

ini_set('display_errors', 1);         // Remover em produção
ini_set('display_startup_errors', 1); // Remover em produção
error_reporting(E_ALL);               // Remover em produção

require_once "../system.php";
require_once "../autoload.php";
// require_once "../vendor/autoload.php";

use Kanban\Controller\Router;
use Kanban\Controller\MySQLConnection;

$router = new Router($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
$router->registerRoute('GET', '/kanban', 'GetKanban');
$router->registerRoute('POST', '/kanban', 'PostKanban');

$route = $router->validateRoute();
switch ($route["situation"]) {
    case "METHOD_NOT_ALLOWED":
        break;
    case "UNAUTHORIZED": // Não autenticado
        $router->redirect("401");
        break;
    case "FORBIDDEN": // Não autorizado
        $router->redirect("403");
        break;
    case "NOT_FOUND":
        $router->redirect("404");
        break;
    case "OK":
        try {
            // $connection = MySQLConnection::createConnection();
            require "../source/controller/" . $route["controller"] . ".php";
        } catch (Throwable $throwable) {
            // Transformar em LOG
            echo "<pre>";
            echo "getFile: " . $throwable->getFile() . PHP_EOL;
            echo "getLine: " . $throwable->getLine() . PHP_EOL;
            echo "getMessage: " . $throwable->getMessage() . PHP_EOL;
            echo "getTraceAsString: " . $throwable->getTraceAsString() . PHP_EOL;
            echo "</pre>";
        }
        break;
}
