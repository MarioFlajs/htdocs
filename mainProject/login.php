<?php include 'loginreg.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="imgBackGround">

    <div class="bodyOfLogin"> 
    <div class="container">  

        <img class="logoLogin" src="pic/Logo.png">

        <form name="register" class="loginText" method="post" action="loginreg.php">


            EMAIL:<input type="text" name="email" value=""></br>
            PASSWORD:<input type="text" name="password" value=""></br>

            <input class="subButton" type="submit" name="submit" value="Log In">

        
        </form>
        

    <a href="regPage.php"><p>If you need to make account click here</p></a>

    <a href="products.php">Back</a>
    <br>

    </div>
    </div>
    








    <footer>
        <a class="footerSty" href="contact.php">Delivery</a>
        <a class="footerSty" href="contact.php">Customer Service</a>
        <a class="footerSty" href="contact.php">Payment Methods</a>
        <a class="footerSty" href="contact.php">Careers</a>
        <a class="footerSty" href="contact.php">Make Money with Us</a>
        <a class="footerSty" href="contact.php">PRIVACY POLICY</a>
    </footer>
</body>
</html>