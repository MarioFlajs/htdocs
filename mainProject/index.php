<?php include 'phpMain.php';


session_start();

?>

















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>WoodBoarding</title>
</head>
<body class="imgBackGround">



  <div class="header">
    <img class="logo" src="pic/Logo.png">

    <?php 
      if (isset($_SESSION['userId'])) {
        echo "<p id='float' class='navList'><a href='./logout.php'>Logout {$_SESSION['userId']}</a></p>";
      }

    ?>

    <nav>
        <ul class="navListMenu">
          <li class="navList"><a href="index.php">Home</a></li>
          <li class="navList"><a href="products.php">Products</a></li>
          <li class="navList"><a href="promotin.php">Promotion</a></li>
          <li class="navList"><a href="simpleBuilds.php">Simple Builds</a></li>
          
          <li class="navList"><a href="contact.php">Contact</a></li>
          <li class="navList">
          <form class="searchForm" action="products.php">

            <input class="searchInput" type="text" placeholder="Search.." name="search">

            <button class="searchMag" type="submit">Search</button>

          </form></li>
          <li style="float:right" class="navList"><a href="about.php">About</a></li>
        </ul>
    </nav>
  </div>
    <br>
  <div class="body">





    <img class="woodPromo" src="pic/ToolPromo.png">
  <br>
   <div class="grid-container">
    <div class="item10"><a href="contact.php"       class="gridImagesText"><img class="gridSizeImg" src="pic/picGrid/image1.png" alt=""><p class="pclass">Wood as a material</p></a></div>
    <div class="item20"><a href="simpleBuilds.php"  class="gridImagesText"><img class="gridSizeImg" src="pic/picGrid/image2.png" alt=""><p class="pclass">Projects</p></a></div>
    <div class="item30"><a href="products.php"      class="gridImagesText"><img class="gridSizeImg" src="pic/picGrid/image3.png" alt=""><p class="pclass">Cut to size</p></a></div> 
    <div class="item40"><a href="contact.php"       class="gridImagesText"><img class="gridSizeImg" src="pic/picGrid/image4.png" alt=""><p class="pclass">Burning questions</p></a></div>
    <div class="item50"><a href="contact.php"       class="gridImagesText"><img class="gridSizeImg" src="pic/picGrid/image5.png" alt=""><p class="pclass">Ethically sourced</p></a></div>
    <div class="item60"><a href="contact.php"       class="gridImagesText"><img class="gridSizeImg" src="pic/picGrid/image6.png" alt=""><p class="pclass">Helping you</p></a></div>
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