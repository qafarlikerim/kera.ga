<?php

   print_r($_GET);

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