<?php

require_once 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="icon" href="/address_book.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<style>
  hr.new5 {
    border: 3px solid red;
    border-radius: 5px;
  }
</style>
<style>
.button {
  display: inline-block;
  padding: 15px 20px;
  font-size: 8px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
</style>
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
    <h2 class="red-text" style="color: red;" align="center">Biz yeni sayta köçdük --><a href="https://qkstudio.ml/">www.QkStudio.ml</a></h2>
    <h2 class="red-text" style="color: red;" align="center" >Мы переехали на новый сайт --><a href="https://qkstudio.ml/">www.QkStudio.ml</a></h2>
    <h2 class="red-text" style="color: red;" align="center" >We moved to a new site --><a href="https://qkstudio.ml/">www.QkStudio.ml</a></h2>
  
    <hr class="new5">
    
    <br>
    <table width="50%"  align="center">
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
    <div class="container">
      <h1>Список контактов</h1>
      <form action="/add.php" method="post">
        <input type="text" name="title" id="title" placeholder="Введите титл..." class="form-control">
        <br>
        <input type="text" name="description" id="description" placeholder="Введите описание..." class="form-control">
        <br>
        <input type="int" name="price" id="price" placeholder="Введите цену..." class="form-control">
        <br>
        <button type="submit" name="sendTask" class="button button2">+</button>&nbsp;<button type="reset" name="sendTask" class="button button3">-</button>
      </form>  
    </div>
</body>
</html>