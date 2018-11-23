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
     * Retrieves a single todos entry from the db.
     *
     * @param int $id is the relevant id of the entry you want to retrieve.
     *
     * @return mixed
     */
    public function getSingleTodo(int $id)
    {
        $query = $this->db->prepare("SELECT `id`, `todoName`, `completed`, `deleted` FROM `todos`
                                               WHERE `id` = :id;");
        $query->bindParam(':id',$id);
        $query->execute();
        return $query->fetch();
    }

    /**
     * Retrieves all todos entries from the db.
     *
     * @return array $query->fetchAll() is all the todos entries.
     */
    public function getAllTodos()
    {
        $query = $this->db->prepare("SELECT `id`, `todoName`, `completed`, `deleted` FROM `todos`;");
        $query->execute();
        return $query->fetchAll();
    }

    /**
     *
     * @return bool
     */
    public function addTodo()
    {
        $query = $this->db->prepare("INSERT INTO `todos` (`id`, `todoName`, `completed`, `deleted`);");
        return $query->execute();
    }

    /**
     * Sets a todos entry to completed in the db.
     *
     * @param int $id is the relevant id of the entry you want to set as completed.
     *
     * @return mixed primary key of row affected.
     */
    public function completeTodo($id)
    {
        $query = $this->db->prepare("UPDATE `todos` SET `completed` = '1' WHERE `id` = :id;");
        $query->bindParam(':id',$id);
        return $query->execute();
    }

    /**
     * Sets a todos entry to deleted in the db.
     *
     * @param int $id is the relevant id of the entry you want to set as deleted.
     *
     * @return mixed primary key of row affected.
     */
    public function deleteTodo(int $id)
    {
        $query = $this->db->prepare("UPDATE `todos` SET `deleted` = '1' WHERE `id` = :id;");
        $query->bindParam(':id',$id);
        return $query->execute();
    }
}
