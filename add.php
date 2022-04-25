<?php
  $task = $_POST['task'];
  if($task == '') {
    echo 'введите само задание';
    exit();
  }

  $dsn = 'mysqli:host=localhost;dbname=kera_addressbook';
  $pdo = new PDO($dsn, 'kera@localhost', '5813910K');

  $sql = 'INSERT INTO tasks(task) VALUES(:task)';
  $query = $pdo->prepare($sql);
  $query->execute(['task' => $task]);

  header('Location: /');
?>