<?php include 'register.php'; 

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

        
        <form name="register" class="loginText" method="post" action="register.php">


        EMAIL:<input  type="text" name="email" value=""></br>
        PASSWORD:<input type="text" name="password" value=""></br>

        <input class="subButton" type="submit" name="submit" value="Create Your Account">


        </form>
        <a href="login.php"><p>If you already have account click here</p></a>

        <a href="products.php">Back</a>
        <br>

   
        </div>
        </div>
  </div>












    <footer>
        <a class="footerSty" href="#home">Delivery</a>
        <a class="footerSty" href="#news">Customer Service</a>
        <a class="footerSty" href="#contact">Payment Methods</a>
        <a class="footerSty" href="#contact">Careers</a>
        <a class="footerSty" href="#contact">Make Money with Us</a>
        <a class="footerSty" href="#about">PRIVACY POLICY</a>
    </footer>
</body>
</html>