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
    <link rel="stylesheet" href="css/stylenumber.css">
  </head>
<body>
    <table width="50%"  align="center">
        <tr>
            <th>Номер
              <button class="open-button" onclick="openForm()">
                <img class="img_add" src="img/add.png" alt="добавить контакт">
              </button>
            </th>
        </tr>

        <?php
            $numbers = mysqli_query($connect, query:"SELECT * FROM `numbers`");
            $numbers = mysqli_fetch_all($numbers);
            foreach ($numbers as $numbers) {
                ?>
                    <tr>
                        <td class="name_range"><?= $numbers[1] ?></td>
                        <td class="icon_range"><a href="update.php?id=<?= $numbers[0] ?>"><img class="table_icon" src="img/edit-icon.png" alt="изменить" title="изменить"></a><a href="vendor/deletenumber.php?id=<?= $numbers[0] ?>"><img class="table_icon" src="img/delete.png" alt="удалить" title="удалить"></a></td>
                    </tr>
                <?php
            }
        ?>
    </table>

    <div class="form-popup" id="myForm">
      <form action="vendor/addnumber.php" class="form-container" method="post">
    
        <label for="number"><b>Номер</b></label>
        <input type="number" placeholder="Введите номер контакта..." name="number" id="number" required>
    
        <button type="submit" name="sendTask" class="btn">Добавить</button>
        <button type="button" name="sendTask" class="btn cancel" onclick="closeForm()">Закрыть</button>
      </form>
    </div>

    <script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
      }
      
      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }
    </script>

</body>
</html>