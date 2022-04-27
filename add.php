<?php
  $number = $_POST['number'];
  if($number == '', 'text') {
    echo 'Введите номер контакта';
    exit();
  }

  require 'configDB.php';

  $sql = 'INSERT INTO people(number) VALUES(:number)'; 
  $query = $pdo->prepare($sql);
  $query->execute(['number' => $number]);

  header('Location: /');

?>