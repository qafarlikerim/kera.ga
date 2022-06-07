<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$name = $_POST['name']
$number = $_POST['number'];

mysqli_query($connect, query:"UPDATE `people` SET `name` = '$name', `number` = '$number' WHERE `people`.`id` = '$id'");

header('Location: ../index.php');
?>