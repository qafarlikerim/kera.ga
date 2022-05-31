<title>Ощибка...</title>
<a href="https://kera.ga/"><img src="https://cdn.create.vista.com/api/media/medium/470867402/stock-vector-back-left-arrow-square-button?token=" title="вернуться назад..." width="4%"></a>
<?php
  $title = $_POST['title'];
  if($title == '') {
    echo('<div style="font-size: 30; font-weight: bold;">'.$rez['nazv']);
    echo 'Введите имя контакта...';
    exit();
  }

  require_once 'configDB.php';
 
  $sql = 'INSERT INTO products(description) VALUES(:description)';
  $query = $pdo->prepare($sql);
  $query->execute(['description' => $description]);

  header('Location: /');
?>