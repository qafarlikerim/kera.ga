<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$number = $_POST['number'];

mysqli_query($connect, query:"UPDATE `numbers` SET `number` = '$number' WHERE `numbers`.`id` = '$id'");

header('Location: ../number.php');
?>