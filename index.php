<?php
require_once('models/model.php');
require_once('add.php');

$list = new Model("localhost", "projet_todos", "root", "");


$uri = strtok($_SERVER['REQUEST_URI'], "?");

if ($uri == "/") {
    //1 db via model
    $list = $list->getAll();
    //2 afficher vue
    foreach ($list as $task) {
        echo $task['title'] . "<br>";
    }

} else {
    echo "<p>choissisez une adresse valide. </p>";
}






?>