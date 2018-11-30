<?php

namespace Todo\Classes\Controllers;

use \Slim\Http\Request as Request;
use \Slim\Http\Response as Response;
use Todo\Classes\Models\TodoModel;

class AddTodoController
{
    private $todoModel;

    /**
     * AddTodoController constructor.
     *
     * @param TodoModel $todoModel
     */
    public function __construct(TodoModel $todoModel)
    {
        $this->todoModel = $todoModel;
    }

    /**
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     *
     * @return mixed
     */
    public function __invoke(Request $request, Response $response, array $args)
    {
        $data = [
            "success" => false,
            "msg" => "Something went wrong",
            "data" => []
        ];
        $userRequest = $request->getParsedBody();
        $newTodo = $userRequest['todoName'];
        $result = $this->todoModel->addTodo($newTodo);
        if ($result) {
            $data = [
                "success" => true,
                "msg" => "Your entry has been successfully added",
                "data" => [$newTodo]
            ];
        }
        return $response->withJson($data,200);
    }
}
