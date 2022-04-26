<?php
  $name = $_POST['name'];
  if($name == '') {
    echo 'Введите имя контакта';
    exit();
  }

  $dsn = 'mysql:host=localhost;dbname=kera_addressbook';
  $pdo = new PDO($dsn, 'kera_kera', '5813910K');

  $sql = 'INSERT INTO people(name) VALUES(:name)';
  $query = $pdo->prepare($sql);
  $query->execute(['name' => $name]);

  header('Location: /');
?>