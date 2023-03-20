<?php 
session_start();



$querystring = $_GET['q'];

$userOrder = $querystring;

$databasePassword = '.!)9uNZn/)aAF@tR';
$databaseUser = 'ThomasAAnderson';
$databaseHost = 'localhost';
$database = 'mainprojectwood';

$connection = new mysqli($databaseHost, $databaseUser, $databasePassword, $database);  

$stmt = $connection->prepare('INSERT INTO woodprop (userOrder) VALUES (?)');

$stmt->bind_param('s',$userOrder);

$stmt->execute();




?>