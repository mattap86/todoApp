<?php


namespace Todo\Classes\Models;


class TodoModel
{
    private $db;
    private $todos = [];

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function displaySingleTodo(string $todo)
    {
        array_push($this->todos, $todo);
    }

    public function displayAllTodos(array $todos)
    {
        foreach ($todos as $todo) {
            array_push($this->todos, $todo);
        }
    }
}