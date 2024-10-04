<?php
mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","");
$pdo->exec("insert into diworks_keijiban(handlename,title,comments) values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");
$stmt=$pdo->query('select * from diworks_keijiban');


header("Location:http://localhost/diworks_keijiban/index.php");