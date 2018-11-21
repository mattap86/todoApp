<?php

namespace Todo\Classes\Factories;

use Psr\Container\ContainerInterface;
use Todo\Classes\Controllers\DisplayTodosController;

class DisplayTodosControllerFactory
{
    /**
     *
     *
     * @param ContainerInterface $container
     * @return Object DisplayTodosController
     */
    public function __invoke(ContainerInterface $container) : DisplayTodosController
    {
        $todoModelFactory = new TodoModelFactory();
        $renderer = $container->get('renderer');
        return new DisplayTodosController($todoModelFactory, $renderer);
    }
}
