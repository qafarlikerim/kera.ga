<?php

    require_once 'config/connect.php';

    $people_id = $_GET['id'];
    $people = mysqli_query($connect, query:"SELECT * FROM `people` WHERE `id` = '$people_id'");
    $people = mysqli_fetch_assoc($people);
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Number</title>
    <link rel="stylesheet" href="css/styleupdate.css">
</head>
<body>
    <h3 align="center">Update Number</h3>
    <div class="form-popup">
        <form action="vendor/update.php" class="form-container" method="post">
            <input type="hidden" name="id" value="<?= $people['id'] ?>">
            <p>Number</p>
            <input type="number" name="number" value="<?= $people['number'] ?>">
            <button type="submit" class="btn">Update</button>
        </form>
    </div>
</body>
</html>