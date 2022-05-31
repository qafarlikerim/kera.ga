<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список контактов</title>
    <link rel="icon" href="/address_book.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
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
  </head>
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