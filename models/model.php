<?php
class Model
{
    public $host = "localhost";
    public $dbname = "projet_todos";
    public $username = "root";
    public $password = "";
    public PDO $dbase;

    public function __construct()
    {
        $this->dbase = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
    }


    public function addOne($task)
    {
        $sql = "INSERT INTO todos (title) VALUES (:task)";
        $statement = $this->dbase->prepare($sql);
        $statement->bindParam(':task', $task);
        $statement->execute();
    }
    public function deleteOne($task)
    {
        $sql = "DELETE FROM todos where id = :id";
        $statement = $this->dbase->prepare($sql);
        $statement->bindParam(':task', $task);
        $statement->execute();
    }
    public function getAll()
    {
        $sql = "SELECT * FROM todos";
        $statement = $this->dbase->prepare($sql);
        $statement->execute();
        $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $tasks;
    }


}

?>