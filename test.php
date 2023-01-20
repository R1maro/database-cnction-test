<?php
require 'inc/config.php';
$dbh = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASS);
//wrong way⬇
//$dbh->query('DELETE FROM publisher WHERE id = '.$_GET['id']);
//$stm = $dbh->query('SELECT * FROM publisher');
//$posts = $stm->fetchAll();
//echo '<pre>';
//print_r($posts);

//A safer way
$stm = $dbh->prepare('DELETE FROM publisher WHERE id = :id');
$stm->execute(['id' => $_GET['id'] ]);
$stm = $dbh->prepare('SELECT * FROM publisher');
$stm->execute();
$publishers = $stm->fetchAll();
echo '<pre>';
print_r($publishers);
