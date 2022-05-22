<?php
  $number = $_POST['number'];
  if($number == '') {
    echo 'Введите номер контакта...';
    exit();
  }

  require 'configDB.php';

  $sql = 'INSERT INTO numbers(number) VALUES(:number)';
  $query = $pdo->prepare($sql);
  $query->execute(['number' => $number]);

  header('Location: /');
?>