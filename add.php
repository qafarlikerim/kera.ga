<?php
  $name, $number = $_POST['name, number'];
  if($name, $number == '') {
    echo 'Введите имя контакта';
    exit();
  }

  require 'configDB.php';

  $sql = 'INSERT INTO people(name, number) VALUES(:name,number)'; 
  $query = $pdo->prepare($sql);
  $query->execute(['name, number' => $name, $number]);

  header('Location: /');

?>