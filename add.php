<title>Ощибка...</title>
<a href="index.php"><img src="https://cdn.create.vista.com/api/media/medium/470867402/stock-vector-back-left-arrow-square-button?token=" title="вернуться назад..." width="4%"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
  $number = $_POST['number'];
  if($number == '') {
    // echo('<div style="font-size: 30; font-weight: bold;">'.$rez['nazv']);
    echo($rez['text']);
    echo 'Введите номер контакта...';
    exit();
  }

  require 'configDB.php';

  $sql = 'INSERT INTO numbers(number) VALUES(:number)';
  $query = $pdo->prepare($sql);
  $query->execute(['number' => $number]);

  header('Location: /');

  require 'configDB.php';
 
  $sql = 'INSERT INTO people(name) VALUES(:name)';
  $query = $pdo->prepare($sql);
  $query->execute(['name' => $name]);

  header('Location: /');
?>