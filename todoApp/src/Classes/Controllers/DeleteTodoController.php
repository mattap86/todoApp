<?php

namespace Todo\Classes\Controllers;

use \Slim\Http\Request as Request;
use \Slim\Http\Response as Response;
use Todo\Classes\Models\TodoModel;


class DeleteTodoController
{
    private $todoModel;

    /**
     * DeleteTodoController constructor.
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
            "msg" => "Failed to delete entry",
            "data" => []
        ];
        $userRequest = $request->getParsedBody();
        $id = $userRequest['id'];
        $result = $this->todoModel->deleteTodo($id);
        if ($result && $id !== null){
            $data = [
                "success" => true,
                "msg" => "This entry was deleted",
                "data" => [$id]
            ];
        }

        return $response->withJson($data,200);
    }
}
