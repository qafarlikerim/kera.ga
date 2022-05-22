<?php
$name = $_POST['name'];
  if($name == '') {
    echo 'Введите имя контакта...';
    exit();
  }

  require 'configDB.php';
 
  $sql = 'INSERT INTO people(name) VALUES(:name)';
  $query = $pdo->prepare($sql);
  $query->execute(['name' => $name]);

  header('Location: /');
?>