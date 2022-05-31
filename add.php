<title>Ощибка...</title>
<a href="https://kera.ga/"><img src="https://cdn.create.vista.com/api/media/medium/470867402/stock-vector-back-left-arrow-square-button?token=" title="вернуться назад..." width="4%"></a>
<?php
  $title = $_POST['title'];
  if($title == '') {
    echo('<div style="font-size: 30; font-weight: bold;">'.$rez['nazv']);
    echo 'Введите имя контакта...';
    exit();
  }

  $price = $_POST['price'];
  if($price == '') {
    echo('<div style="font-size: 30; font-weight: bold;">'.$rez['nazv']);
    echo 'Введите номер контакта...';
    exit();
  }

  $description = $_POST['description'];
  if($description == '') {
    echo('<div style="font-size: 30; font-weight: bold;">'.$rez['nazv']);
    echo 'Введите дату...';
    exit();
  }

  require_once 'configDB.php';

  $sql = 'INSERT INTO products(title) VALUES(:title)';
  $query = $pdo->prepare($sql);
  $query->execute(['title' => $title]);

  header('Location: /');

  require_once 'configDB.php';
 
  $sql = 'INSERT INTO products(price) VALUES(:price)';
  $query = $pdo->prepare($sql);
  $query->execute(['price' => $price]);

  header('Location: /');

  require_once 'configDB.php';
 
  $sql = 'INSERT INTO products(description) VALUES(:description)';
  $query = $pdo->prepare($sql);
  $query->execute(['description' => $description]);

  header('Location: /');
?>