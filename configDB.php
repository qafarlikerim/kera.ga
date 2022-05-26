<?php
    // $dsn = 'mysql:host=localhost;dbname=kera_addressbook';
    // $pdo = new PDO($dsn, 'kera_kera', '5813910K');
    $connect = mysqli_connect(host:'localhost', user:'kera_kera', password:'5813910K', database:'kera_addressbook');;

    if (!connect){
        echo 'Error connect to database!';
    }
?> 
  