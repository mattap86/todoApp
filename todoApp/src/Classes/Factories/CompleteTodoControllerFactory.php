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
        $renderer = $container->get('renderer');
        $todoModelFactory = $container->get('TodoModel');
        return new CompleteTodoController($renderer, $todoModelFactory);
    }
}
