<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// database
$container['db'] = function () {
    return $db = new PDO('mysql:host=192.168.20.20;dbname=todos', 'root');
};

$container['TodoModel'] = new \Todo\Classes\Factories\TodoModelFactory();

$container['DisplayTodosController'] = new \Todo\Classes\Factories\DisplayTodosControllerFactory();
