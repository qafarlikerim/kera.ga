<?php
    $connect = mysqli_connect( host:'localhost', user:'kera_kera', password:'5813910K', database:'kera_addressbook');

    if (!$connect) {
        echo 'Error connect to database';
    }
?> 
  