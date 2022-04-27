<?php
  $number = $_POST['number'];
  if($number == '') {
    echo 'Введите номер контакта';
    exit();
  }

  require 'configDB.php';

  $sql = 'INSERT INTO people(number) VALUES(:number)'; 
  $query = $pdo->prepare($sql);
  $query->execute(['number' => $number]);

  header('Location: /');

  $name = $_POST['name'];
  if($name == '') {
    echo 'Введите имя контакта';
    exit();
  }

  require 'configDB.php';
  
  $sql = 'INSERT INTO people(name) ALUES(:name)'; 
  $query = $pdo->prepare($sql);
  $query->execute(['name' => $name]);

  header('Location: /');

?>