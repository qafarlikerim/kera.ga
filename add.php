<?php
  $name = $_POST['name'], $number =$_POST['number'];
  if($name == ''), if($number == '') {
    echo 'Введите имя контакта', echo 'Введите номер';
    exit();
  }

  require 'configDB.php';

  $sql = 'INSERT INTO people(name) VALUES(:name)', $sql = 'INSERT INTO people(number) VALUES(:number)'; 
  $query = $pdo->prepare($sql);
  $query->execute(['name' => $name]), $query->execute(['number' => $number]);

  header('Location: /');

?>