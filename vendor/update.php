<?php 

require_once '../config/connect.php';

$id = $_POST['id'];
$number = $_POST['number'];

mysqli_query($connect, query:"UPDATE `people` SET `number` = '$number' WHERE `people`.`id` = '$id'");

header('Location: ../number.php');
?>