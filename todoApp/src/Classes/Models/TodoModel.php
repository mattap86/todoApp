<?php


namespace Todo\Classes\Models;


class TodoModel
{
    private $db;
    private $todos = [];

    /**
     * TodoModel constructor.
     *
     * @param \PDO $db
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Adds a single $todo to the $todos array.
     *
     * @param string $todo
     */
    public function displaySingleTodo(string $todo)
    {
        array_push($this->todos, $todo);
    }

    /**
     * Adds all $todos to the $todos array.
     *
     * @param array $todos
     */
    public function displayAllTodos(array $todos)
    {
        foreach ($todos as $todo) {
            array_push($this->todos, $todo);
        }
    }
}