<title>Ощибка...</title>
<a href="https://kera.ga/"><img src="https://cdn.create.vista.com/api/media/medium/470867402/stock-vector-back-left-arrow-square-button?token=" title="вернуться назад..." width="4%"></a>
<?php
  $title = $_POST['title'];
  if($title == '') {
    echo('<div style="font-size: 30; font-weight: bold;">'.$rez['nazv']);
    echo 'Введите имя контакта...';
    exit();
  }

  $price = $_POST['price'];
  if($price == '') {
    echo('<div style="font-size: 30; font-weight: bold;">'.$rez['nazv']);
    echo 'Введите price...';
    exit();
  }

  $description = $_POST['description'];
  if($description == '') {
    echo('<div style="font-size: 30; font-weight: bold;">'.$rez['nazv']);
    echo 'Введите description...';
    exit();
  }

  require_once 'connect.php';

  $title = $_POST['title'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  
  mysqli_query($connect, query:"INSERT INTO `products` (`id`, `title`, `price`, `descripsion`) VALUES (NULL, '$title', '$price', '$description')");

  header('Location: /');
?>