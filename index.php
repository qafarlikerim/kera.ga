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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>
    <h2 class="red-text" style="color: red;" align="center" ><a href="https://qkstudio.ml/">www.QkStudio.ml</a></h2>
  
    <hr class="new5">
    
    <div class="container" id="task">
      <h1>Список контактов</h1>
      <form action="vendor/add.php" method="post">
        <input type="text" name="name" id="name" placeholder="Введите имя контакта..." class="form-control">
        <br>
        <input type="number" name="number" id="number" placeholder="Введите номер контакта..." class="form-control">
        <br>
        <button type="submit" name="sendTask" class="button button2">+</button>&nbsp;<button type="reset" name="sendTask" class="button button3">-</button>
      </form>  
    </div>
    <br><br>
    <table width="50%"  align="center">
        <tr>
            <th>Имя</th>
            <th>Номер</th>
            <th>Редактирование</th>
        </tr>

        <?php
            $people = mysqli_query($connect, query:"SELECT * FROM `people`");
            $people = mysqli_fetch_all($people);
            foreach ($people as $people) {
                ?>
                    <tr>
                        <td><?= $people[1] ?></td>
                        <td><?= $people[2] ?></td>
                        <td class="icon_range"><a href="update.php?id=<?= $people[0] ?>"><img class="table_icon" src="data:image/jpeg;base64,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" alt="изменить" title="изменить"></a><a href="vendor/delete.php?id=<?= $people[0] ?>"><img class="table_icon" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSdV34bVyKdVZAKAXsryW4F0QDnv830tB03A&usqp=CAU" alt="удалить" title="удалить"></a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>