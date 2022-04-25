<?php
  $task = $_POST['task'];
  if($task == '') {
    echo 'введите само задание';
    exit();
  }

  $dsn = 'mysql:host=localhost;dbname=kera_addressbook';
  $pdo = new PDO($dsn, 'kera_kera', '5813910K');

  $sql = 'INSERT INTO tasks(task) VALUES(:task)';
  $query = $pdo->prepare($sql);
  $query->execute(['task' => $task]);

  header('Location: /');
?>