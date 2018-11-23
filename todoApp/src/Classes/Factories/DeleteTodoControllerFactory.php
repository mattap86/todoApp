<?php

namespace Todo\Classes\Factories;

use Psr\Container\ContainerInterface;
use Todo\Classes\Controllers\DeleteTodoController;


class DeleteTodoControllerFactory
{
    /**
     * Defines the default behaviour of this Class when treated as a method.
     * Instantiates DeleteTodoController with any required dependencies.
     *
     * @param ContainerInterface $container is the DIC.
     *
     * @return DeleteTodoController
     */
    public function __invoke(ContainerInterface $container) : DeleteTodoController
    {
        $todoModelFactory = $container->get('TodoModel');
        return new DeleteTodoController($todoModelFactory);
    }
}