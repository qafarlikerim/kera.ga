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
  <body>
    <h2 class="red-text" style="color: red;" align="center">Biz yeni sayta köçdük --><a href="https://qkstudio.ml/">www.QkStudio.ml</a></h2>
    <h2 class="red-text" style="color: red;" align="center" >Мы переехали на новый сайт --><a href="https://qkstudio.ml/">www.QkStudio.ml</a></h2>
    <h2 class="red-text" style="color: red;" align="center" >We moved to a new site --><a href="https://qkstudio.ml/">www.QkStudio.ml</a></h2>
  
    <hr class="new5">
    
    <br>
    <table width="50%"  align="center">
      <tr>
          <th>№</th>
          <th>Name</th>
      </tr>
    </table>
    <div class="container">
      <h1>Список контактов</h1>
      <form action="/add.php" method="post">
        <input type="text" name="name" id="name" placeholder="Введите имя..." class="form-control">
        <br>
        <input type="int" name="number" id="number" placeholder="Введите номер..." class="form-control">
        <br>
        <input type="date" name="date" id="date" placeholder="Введите дату..." class="form-control">
        <br>
        <button type="submit" name="sendTask" class="button button2">+</button>&nbsp;<button type="reset" name="sendTask" class="button button3">-</button>
      </form>
  
      <?php
        require_once 'configDB.php';

        $query = $pdo->query('SELECT * FROM `people` ORDER BY `id` DESC');
        while($row = $query->fetch(PDO::FETCH_OBJ)) {
         echo '<li><b>'.$row->name.'</b></li>';
        }
        echo '<ul>';
        echo '<ul>';
        echo '<ul>';
        echo '<ul>';
        echo '<ul>';
        echo '<ul>';
        echo '<ul>';
        echo '<ul>';

        $query = $pdo->query('SELECT * FROM `numbers` ORDER BY `id` DESC');
        while($row = $query->fetch(PDO::FETCH_OBJ)) {
         echo '<li><b>'.$row->number.'</b></li>';
        }


        $query = $pdo->query('SELECT * FROM `data` ORDER BY `id` DESC');
        while($row = $query->fetch(PDO::FETCH_OBJ)) {
         echo '<li><b>'.$row->data.'</b></li>';
        }
        echo '</ul>';
      ?>
  
    </div>
  </body>
</html>