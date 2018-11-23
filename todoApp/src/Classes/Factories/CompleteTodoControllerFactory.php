<?php

namespace Todo\Classes\Factories;

use Psr\Container\ContainerInterface;
use Todo\Classes\Controllers\CompleteTodoController;


class CompleteTodoControllerFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return CompleteTodoController
     */
    public function __invoke(ContainerInterface $container) : CompleteTodoController
    {
        $todoModelFactory = $container->get('TodoModel');
        return new CompleteTodoController($todoModelFactory);
    }
}
