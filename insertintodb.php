<?php

require_once('models/model.php');

// 1 = db
if (isset($_GET["add"])) {
    $task = $_GET["add"];
    $model = new Model("localhost", "projet_todos", "root", "");
    $model->addOne($task);
} else {
    echo "Entrer une donnée valide";
}
// 2 = vue ???
header('Location: /');
?>