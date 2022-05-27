<?php

$pdo = new PDO("localhost", "kera_kera", "5813910K", "kera_addressbook");

echo '<ul>';
$query = $pdo->query('SELECT * FROM `people` ORDER BY `id` DESC');
while($row = $query->fetch(PDO::FETCH_OBJ)) {
 echo '<li><b>'.$row->name.'</b></li>';
}
?> 
