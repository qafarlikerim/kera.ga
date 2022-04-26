<?php
  $name = $_POST['name'];
  if($name == '') {
    echo 'Введите имя контакта';
    exit();
  }

  require 'configDB.php';

  $sql = 'INSERT INTO people(name) VALUES(:name)';
  $query = $pdo->prepare($sql);
  $query->execute(['name' => $name]);

  header('Location: /');

  $telephone = $_POST['telephone'];
  if($telephone == '') {
    echo 'Введите марку телефона';
    exit();
  }

  require 'configDB.php';
  
  $sql = 'INSERT INTO people(telephone) VALUES(:telephone)';
  $query = $pdo->prepare($sql);
  $query->execute(['telephone' => $telephone]);

  header('Location: /');

  $number = $_POST['number'];
  if($number == '') {
    echo 'Введите номер';
    exit();
  }

  require 'configDB.php';
  
  $sql = 'INSERT INTO people(number) VALUES(:number)';
  $query = $pdo->prepare($sql);
  $query->execute(['number' => $number]);

  header('Location: /');

  $activity = $_POST['activity'];
  if($activity == '') {
    echo 'Введите активность';
    exit();
  }

  require 'configDB.php';
  
  $sql = 'INSERT INTO people(activity) VALUES(:activity)';
  $query = $pdo->prepare($sql);
  $query->execute(['activity' => $activity]);

  header('Location: /');

?>