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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="icon" href="/address_book.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/stylenumber.css">
  </head>
<body>
      <form action="vendor/addnumber.php" class="form-container" method="post">
    
        <label for="number"><b>Номер</b></label>
        <input type="number" placeholder="Введите номер контакта..." name="number" id="number" value="<?= $people[2] ?>" required>
    
        <button type="submit" name="sendTask" class="btn">Добавить</button>
      </form>
</body>
</html>