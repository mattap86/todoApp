<?php

namespace Todo\Classes\Controllers;

use \Slim\Http\Request as Request;
use \Slim\Http\Response as Response;
use Slim\Views\PhpRenderer;
use Todo\Classes\Models\TodoModel;

class DisplayTodosController
{
    private $renderer;
    private $todoModel;
    public function __construct(PhpRenderer $renderer, TodoModel $todoModel)
    {
        $this->renderer = $renderer;
        $this->todoModel = $todoModel;
    }
    public function __invoke(Request $request, Response $response, array $args)
    {
        $this->todoModel->displayAllTodos($args);
        return $this->renderer->render($response, 'display.phtml', $args);
    }
}