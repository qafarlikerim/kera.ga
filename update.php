<?php

    require_once 'config/connect.php';

    $people_id = $_GET['id'];
    $people = mysqli_query($connect, query:"SELECT * FROM `people` WHERE `id` = '$people_id'");
    $people = mysqli_fetch_assoc($people);
    print_r($people);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Contact</title>
</head>
<body>
    <h3>Update Contact</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $people['id'] ?>">
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