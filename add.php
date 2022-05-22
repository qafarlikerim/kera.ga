<title>Ощибка...</title>
<?php
  $number = $_POST['number'];
  if($number == '') {
    echo('<div style="font-size: 30; font-weight: bold;">'.$rez['nazv']);
    echo 'Введите номер контакта...';
    exit();
  }
  
  $name = $_POST['name'];
  if($name == '') {
    echo('<div style="font-size: 30; font-weight: bold;">'.$rez['nazv']);
    echo 'Введите имя контакта...';
    exit();
  }

  require 'configDB.php';

  $sql = 'INSERT INTO numbers(number) VALUES(:number)';
  $query = $pdo->prepare($sql);
  $query->execute(['number' => $number]);

  header('Location: /');

  require 'configDB.php';
 
  $sql = 'INSERT INTO people(name) VALUES(:name)';
  $query = $pdo->prepare($sql);
  $query->execute(['name' => $name]);

  header('Location: /');
?>