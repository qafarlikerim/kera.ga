<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM `people` WHERE `people`.`id` = '$id'");

header('Location: ../index.php');

$id = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM `numbers` WHERE `number`.`id` = '$id'");

header('Location: ../index.php');

?>