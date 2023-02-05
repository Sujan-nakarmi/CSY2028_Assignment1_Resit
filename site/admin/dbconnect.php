<?php 

$server='localhost';
$username='root';
$password='password';
$dbname='assignment1';

$pdo = new PDO("mysql:host=$server; dbname=$dbname", $username, $password);

?>