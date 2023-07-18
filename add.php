<?php
require_once('models/model.php')
    ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do</title>
</head>

<body>
    <!-- mettre une route et non une page php -->
    <form action="insertintodb.php" method="GET">
        <label for="add">Ajouter</label>
        <input type="text" name="add" id="add">
        <input type="submit" value="Valider">
    </form>
</body>

</html>