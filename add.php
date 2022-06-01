<title>Ощибка...</title>
<a href="https://kera.ga/"><img src="https://cdn.create.vista.com/api/media/medium/470867402/stock-vector-back-left-arrow-square-button?token=" title="вернуться назад..." width="4%"></a>
<?php

require_once 'connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, query:"INSERT INTO `products` (`id`, `title`, `price`, `descripsion`) VALUES (NULL, '$title', '$price', '$description')");

header( string: 'Location: index.php');
?>