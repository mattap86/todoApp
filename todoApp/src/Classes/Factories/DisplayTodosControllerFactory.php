<?php

namespace Todo\Classes\Factories;

use Psr\Container\ContainerInterface;
use Todo\Classes\Controllers\DisplayTodosController;

class DisplayTodosControllerFactory
{
    /**
     * @param ContainerInterface $container
     *
     * @return DisplayTodosController
     */
    public function __invoke(ContainerInterface $container) : DisplayTodosController
    {
        $renderer = $container->get('renderer');
        $todoModelFactory = $container->get('TodoModel');
        return new DisplayTodosController($renderer, $todoModelFactory);
    }
}
