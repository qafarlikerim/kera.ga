<?php

require_once 'config/connect.php';

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
    
    <div class="container" id="task">
      <h1>Список контактов</h1>
      <form action="vendor/add.php" method="post">
        <input type="text" name="name" id="name" placeholder="Введите имя контакта..." class="form-control">
        <br>
        <input type="number" name="number" id="number" placeholder="Введите номер контакта..." class="form-control">
        <br>
        <input type="date" name="date" id="date" placeholder="Введите дату..." class="form-control">
        <br>
        <button type="submit" name="sendTask" class="button button2">+</button>&nbsp;<button type="reset" name="sendTask" class="button button3">-</button>
      </form>  
    </div>
    <br><br>
    <table width="50%"  align="center">
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Номер</th>
            <th>Дата</th>
        </tr>

        <?php
            $people = mysqli_query($connect, query:"SELECT * FROM `people`");
            $people = mysqli_fetch_all($people);
            foreach ($people as $people) {
                ?>
                    <tr>
                        <td><?= $people[0] ?></td>
                        <td><?= $people[1] ?></td>
                        <td><?= $people[2] ?></td>
                        <td><?= $people[3] ?></td>
                        <td><a href="update.php?id<?= $people[0] ?>">Обновить</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>