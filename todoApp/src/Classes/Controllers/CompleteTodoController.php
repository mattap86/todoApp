<?php

namespace Todo\Classes\Controllers;

use \Slim\Http\Request as Request;
use \Slim\Http\Response as Response;
use Todo\Classes\Models\TodoModel;


class CompleteTodoController
{
    private $todoModel;

    /**
     * CompleteTodoController constructor.
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
            "msg" => "this has not worked",
            "data" => []
        ];
        $userRequest = $request->getParsedBody();
        $id = $userRequest['id'];
        $result = $this->todoModel->completeTodo($id);
        if ($result && $id !== null){
            $data = [
                "success" => true,
                "msg" => "This todo has been completed",
                "data" => [$id]
            ];
        }
        return $response->withJson($data,200);
    }
}
