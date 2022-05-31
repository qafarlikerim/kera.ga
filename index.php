<?php

require_once 'connect.php';

?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Список контактов</title>
  </head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
  <body>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
        </tr>

        <?php
            $products = mysqli_query($connect, query:"SELECT * FROM `products`");
            $products = mysqli_fetch_all($products);
            foreach ($products as $products) {
                ?>
                    <tr>
                        <td><?= $products[0] ?></td>
                        <td><?= $products[1] ?></td>
                        <td><?= $products[3] ?></td>
                        <td><?= $products[2] ?></td>
                    </tr>
                <?php
            }
        ?>
    </table>  
  </body>
</html>