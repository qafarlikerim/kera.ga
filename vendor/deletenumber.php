<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM `people` WHERE `people`.`id` = '$id'");

header('Location: ../number.php');

?>