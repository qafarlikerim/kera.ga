<?php
  $name = $_POST['name'];
  if($name == '') {
    echo 'Введите имя контакта';
    exit();
  }

  $number = $_POST['number'];
  if($number == '') {
    echo 'Введите номер';
    exit();
  }

  require 'configDB.php';

  $sql = 'INSERT INTO people(name) VALUES(:name)';
  $query = $pdo->prepare($sql);
  $query->execute(['name' => $name]);

  $sql = 'INSERT INTO people(number) VALUES(:number)';
  $query = $pdo->prepare($sql);
  $query->execute(['number' => $number]);

  header('Location: /');

?>