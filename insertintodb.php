<?php

require_once('models/model.php');

if (isset($_GET["add"])) {
    $task = trim($_GET["add"]);
    if (!empty($task)) {
        $model = new Model();
        $model->addOne($task);
    } else {
        echo "Entrer une donnée valide";
    }
} else {
    echo "Entrer une donnée valide";
}

// 2 = vue ???
header('Location: /');
?>