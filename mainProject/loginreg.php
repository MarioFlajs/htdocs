<?php 
session_start();



If(isset($_POST['email']) && isset($_POST['password'])) {

$databasePassword = '.!)9uNZn/)aAF@tR';
$databaseUser = 'ThomasAAnderson';
$databaseHost = 'localhost';
$database = 'mainprojectwood';

$connection = new mysqli($databaseHost, $databaseUser, $databasePassword, $database);  

$stmt = $connection->prepare('SELECT * FROM userreg WHERE `email` = ?');

$stmt->bind_param('s', $_POST['email']);
$stmt->execute();
$result = $stmt->get_result();
var_dump($result->num_rows);
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if (password_verify($_POST['password'], $user['password'])) {
         $_SESSION['userId'] = $user['email'];
        header('location: ./products.php');
        exit();
    }
   
    
}


header('Location: login.php');
}


?>