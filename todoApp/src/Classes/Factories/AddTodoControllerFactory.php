<?php

namespace Todo\Classes\Factories;

use Psr\Container\ContainerInterface;
use Todo\Classes\Controllers\AddTodoController;

class AddTodoControllerFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return AddTodoController
     */
    public function __invoke(ContainerInterface $container) : AddTodoController
    {
        $todoModelFactory = $container->get('TodoModel');
        return new AddTodoController($todoModelFactory);
    }
}