<?php

namespace Todo\Classes\Controllers;

use \Slim\Http\Request as Request;
use \Slim\Http\Response as Response;
use Slim\Views\PhpRenderer;
use Todo\Classes\Models\TodoModel;

class CompleteTodoController
{
    private $renderer;
    private $todoModel;

    /**
     * DisplayTodosController constructor.
     *
     * @param PhpRenderer $renderer
     *
     * @param TodoModel $todoModel
     */
    public function __construct(PhpRenderer $renderer, TodoModel $todoModel)
    {
        $this->renderer = $renderer;
        $this->todoModel = $todoModel;
    }

    /**
     *
     * @param int $id
     * @param Request $request
     * @param Response $response
     * @param array $args
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function __invoke(int $id, Request $request, Response $response, array $args)
    {
        $this->todoModel->completeTodo($id);
        return $this->renderer->render($response, 'display.phtml', $args);
    }
}
