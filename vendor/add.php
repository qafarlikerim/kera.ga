<title>Ощибка...</title>
<a href="https://kera.ga/"><img src="https://cdn.create.vista.com/api/media/medium/470867402/stock-vector-back-left-arrow-square-button?token=" title="вернуться назад..." width="4%"></a>
<?php

  $number = $_POST['number'];
  if($number == '') {
    echo('<div style="font-size: 30; font-weight: bold;">'.$rez['nazv']);
    echo 'Введите имя контакта...';
    exit();
  }


  require_once '../config/connect.php';

  $name = $_POST['name'];
  $number = $_POST['number'];

  mysqli_query($connect, query:"INSERT INTO `people` (`id`, `name`, `number`) VALUES (NULL, '$name', '$number')");

  header('Location: /');
?>