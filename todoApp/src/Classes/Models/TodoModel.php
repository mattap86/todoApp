<?php


namespace Todo\Classes\Models;


class TodoModel
{
    private $db;

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
     * @param $id
     *
     * @return mixed
     */
    public function getSingleTodo($id)
    {
        $query = $this->db->prepare("SELECT `todoName` FROM `todos` WHERE `id` = :id;");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch();
    }

    /**
     * @return array
     */
    public function getAllTodos()
    {
        $query = $this->db->prepare("SELECT `todoName` FROM `todos`;");
        $query->execute();
        return $query->fetchAll();
    }

    public function completeTodo()
    {
        $query = $this->db->prepare("UPDATE `todos` SET `completed` = `1`;");
        $query->execute();
    }
}
