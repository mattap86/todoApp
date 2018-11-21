<?php


namespace Todo\Classes\Models;


class TodoModel
{
    private $db;
    private $todos = [];

    /**
     * TodoModel constructor.
     *
     * @param \PDO $db is the database.
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Adds a single $todo to the $todos array.
     *
     * @param string $todo is an entry into the todoApp.
     */
    public function displaySingleTodo(string $todo)
    {
        array_push($this->todos, $todo);
    }

    /**
     * Adds all $todos to the $todos array.
     *
     * @param array $todos are entries into the todoApp.
     */
    public function displayAllTodos(array $todos)
    {
        foreach ($todos as $todo) {
            array_push($this->todos, $todo);
        }
    }
}
