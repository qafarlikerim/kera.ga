<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$number = $_POST['number'];
$date = $_POST['date'];

mysqli_query($connect, query:"UPDATE `people` SET `name` = '$name', `number` = '$number', `date` = '$date' WHERE `people`.`id` = '$id'");

header('Location: ../index.php');
?>