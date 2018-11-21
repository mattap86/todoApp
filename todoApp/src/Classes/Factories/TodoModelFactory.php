<?php

namespace Todo\Classes\Factories;

use Psr\Container\ContainerInterface;
use Todo\Classes\Models\TodoModel;

class TodoModelFactory
{
    /**
     * Defines the behaviour of this class when treated like a method.
     *
     * @param ContainerInterface $container is the DIC.
     *
     * @return TodoModel is an instantiation of the TodoModel class.
     */
    public function __invoke(ContainerInterface $container) : TodoModel
    {
        $db = $container->get('db');
        return new TodoModel($db);
    }
}
