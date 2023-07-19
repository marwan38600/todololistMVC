<?php
require_once('controllers/controller.php');

$list = new Model();


$uri = strtok($_SERVER['REQUEST_URI'], "?");

if ($uri == "/") {
    $ctrl = new Controller;
    echo $ctrl->displayAll();
} else {
    echo "<p>choissisez une adresse valide. </p>";
}






?>