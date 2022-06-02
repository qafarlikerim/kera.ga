<?php

    require_once 'config/connect.php';

    $people_id = $_GET['id'];
    print_r($people_id);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Contact</title>
</head>
<body>
    <h3>Update Contact</h3>
    <form action="add.php" method="post">
        <p>Name</p>
        <input type="text" name="name" value="<?= $people['name'] ?>">
        <p>Number</p>
        <input type="number" name="number" value="<?= $people['number'] ?>">
        <p>Date</p>
        <input type="date" name="date" value="<?= $people['date'] ?>">
        <br><br>
        <button type="submit">Add new contact</button>
    </form>
</body>
</html>