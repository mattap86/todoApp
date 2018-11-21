<?php

namespace Todo\Classes\Factories;

use Psr\Container\ContainerInterface;
use Todo\Classes\Models\TodoModel;

class TodoModelFactory
{
    public function __invoke(ContainerInterface $container) : TodoModel
    {
        $db = $container->get('db');
        return new TodoModel($db);
    }
}
