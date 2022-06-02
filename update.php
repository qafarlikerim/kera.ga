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
    <form action="add.php" method="post">
        <p>Name</p>
        <input type="text" name="name">
        <p>Number</p>
        <input type="number" name="number">
        <p>Date</p>
        <input type="date" name="date">
        <br><br>
        <button type="submit">Add new contact</button>
    </form>
</body>
</html>