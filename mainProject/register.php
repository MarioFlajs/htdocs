<?php 
session_start();




If(isset($_POST['email']) && isset($_POST['password'])) {

$databasePassword = '.!)9uNZn/)aAF@tR';
$databaseUser = 'ThomasAAnderson';
$databaseHost = 'localhost';
$database = 'mainprojectwood';

$connection = new mysqli($databaseHost, $databaseUser, $databasePassword, $database);  

$stmt = $connection->prepare('INSERT INTO `userreg` (email, password) VALUES(?, ?);');

$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt->bind_param('ss', $_POST['email'], $password_hash);

$registers = $stmt->execute();

if ($registers) {
    header('location: ./login.php');
    exit();
} 
header('location: ./register.php');
    exit();
}

?>
