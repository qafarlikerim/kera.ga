<?php

    require_once 'config/connect.php';

    $numbers_id = $_GET['id'];
    $numbers = mysqli_query($connect, query:"SELECT * FROM `numbers` WHERE `id` = '$numbers_id'");
    $numbers = mysqli_fetch_assoc($nymbers);
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Number</title>
</head>
<body>
    <h3>Update Number</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $numbers['id'] ?>">
        <p>Number</p>
        <input type="number" name="number" value="<?= $numbers['number'] ?>">
        <button type="submit">Update</button>
    </form>
</body>
</html>