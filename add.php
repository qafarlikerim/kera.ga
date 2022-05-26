<title>Ощибка...</title>
<a href="https://kera.ga/"><img src="https://cdn.create.vista.com/api/media/medium/470867402/stock-vector-back-left-arrow-square-button?token=" title="вернуться назад..." width="4%"></a>
<?php
  $name = $_POST['name'];
  if($name == '') {
    echo('<div style="font-size: 30; font-weight: bold;">'.$rez['nazv']);
    echo 'Введите имя контакта...';
    exit();
  }

  $number = $_POST['number'];
  if($number == '') {
    echo('<div style="font-size: 30; font-weight: bold;">'.$rez['nazv']);
    echo 'Введите номер контакта...';
    exit();
  }

  $data = $_POST['data'];
  if($data == '') {
    echo('<div style="font-size: 30; font-weight: bold;">'.$rez['nazv']);
    echo 'Введите дату...';
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

  require 'configDB.php';
 
  $sql = 'INSERT INTO people(data) VALUES(:data)';
  $query = $pdo->prepare($sql);
  $query->execute(['data' => $data]);

  header('Location: /');
?>
<?php
    $names = mysqli_query($pdo, query:"SELECT * FROM `people`");
    $names = mysqli_fetch_all($names);
    foreach ($names as name) {
    }
?>