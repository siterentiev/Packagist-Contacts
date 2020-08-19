<?php

require '../vendor/autoload.php';

use Aura\SqlQuery\QueryFactory;
use DI\ContainerBuilder;
use Delight\Auth\Auth;
use League\Plates\Engine;

$containerDIBuilder = new ContainerBuilder();
$containerDIBuilder->addDefinitions([
    Engine::class => function()
    {
        return new Engine('../app/views');
    },

    PDO::class => function()
    {
        $driver = 'mysql';
        $host = 'localhost';
        $database_name = 'lvl3mod2exam';
        $username = 'root';
        $password = '';
        return new PDO("$driver:host=$host;dbname=$database_name;", $username, $password);
    },

    Auth::class => function($container)
    {
        return new Auth($container->get('PDO'));
    },

    QueryFactory::class => function()
    {
        return new QueryFactory('mysql');
    }
]);
$containerDI = $containerDIBuilder->build();

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {

    $r->addRoute('GET', '/', ['App\controllers\PagesController', 'startPage']);
    $r->addRoute('GET', '/home', ['App\controllers\PagesController', 'indexPage']);
    $r->addRoute('GET', '/add', ['App\controllers\PagesController', 'createUserPage']);
    $r->addRoute('GET', '/edit', ['App\controllers\PagesController', 'editInfoPage']);
    $r->addRoute('GET', '/secure', ['App\controllers\PagesController', 'securePage']);
    $r->addRoute('GET', '/status', ['App\controllers\PagesController', 'statusPage']);
    $r->addRoute('GET', '/photo', ['App\controllers\PagesController', 'uploadImgPage']);
    $r->addRoute('GET', '/roles', ['App\controllers\PagesController', 'rolesPage']);


    $r->addRoute('POST', '/login', ['App\controllers\HomeController', 'login']);
    $r->addRoute('POST', '/new', ['App\controllers\HomeController', 'createUser']);
    $r->addRoute('POST', '/update', ['App\controllers\HomeController', 'updateInfo']);
    $r->addRoute('POST', '/change', ['App\controllers\HomeController', 'updateEmailOrPass']);
    $r->addRoute('POST', '/set', ['App\controllers\HomeController', 'setUserStatus']);
    $r->addRoute('POST', '/image', ['App\controllers\HomeController', 'uploadImg']);
    $r->addRoute('GET', '/delete', ['App\controllers\HomeController', 'deleteUser']);
    $r->addRoute('GET', '/access', ['App\controllers\HomeController', 'setAccess']);
    $r->addRoute('GET', '/loginas', ['App\controllers\HomeController', 'loginAsUser']);

});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo 'Ошибка 404. Страница не найдена';
        break;

    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        echo 'Ошибка 405. Метод не разрешен';
        break;

    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        $containerDI->call($routeInfo[1], $routeInfo[2]);
        break;
}








