<?php
class Model
{
    public $host = "localhost";
    public $dbname;
    public $username = "root";
    public $password = "";
    public $dbase;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
        $this->dbase = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }


    public function addOne($task)
    {
        $sql = "INSERT INTO todos (title) VALUES (:task)";
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