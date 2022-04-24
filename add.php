<?php
   $task = $_post['task'];
   if($task == '') {
     echo 'введите само задание';
     exit();
   }

   $dsn = 'mysql:host=localhost;dbname=kera_addressbook';
   $pdo = new PDO($dsn, 'root', 'root');

   $sql = 'INSERT INTO tasks(task) VALUES(:task)';
   $query = $pdo->prepare($sql);
   $query->execute(['task' => $task]);

   header('Location: /');
?>