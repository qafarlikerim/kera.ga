<?php

require_once 'config/connect.php';

    $numbers_id = $_GET['people_id'];
    $numbers = mysqli_query($connect, query:"SELECT `number` FROM `numbers` WHERE `people_id` = '$numbers_id'");
    $numbers = mysqli_fetch_assoc($numbers);
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
    <table width="50%"  align="center">
        <tr>
            <th><p>Number</p></th>
        </tr>
        <tr>
            <td>
                <div class="form-popup">
                    <form action="vendor/update.php" class="form-container" method="post">
                        <input type="hidden" name="id" value="<?= $numbers['people_id'] ?>">
                
                        <input type="number" name="number" value="<?= $numbers['number'] ?>">
                        <button type="submit" class="btn">Update</button>
                    </form>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>