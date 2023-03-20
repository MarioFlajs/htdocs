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
        <li class="navList"><a href="indexLoginUser.php">Home</a></li>
          <li class="navList"><a href="productsLoginUser.php">Products</a></li>
          <li class="navList"><a href="promotionLoginUser.php">Promotion</a></li>
          <li class="navList"><a href="simpleBuildsLoginUser.php">Simple Builds</a></li>
          
          <li class="navList"><a href="contactLoginUser.php">Contact</a></li>
          <li class="navList">
            <form class="searchForm" action="productsLoginUser.php">

              <input class="searchInput" type="text" placeholder="Search.." name="search">

              <button class="searchMag" type="submit">Search</button>

              </form></li>
          <li style="float:right" class="navList"><a href="aboutLoginUser.php">About</a></li>
        </ul>
    </nav>
  </div>
    <br>
  <div class="body">


    <img class="woodPromo" src="pic/ToolPromo.png">
  <br>
   <div class="grid-container">
    <div class="item10"><a href="contactLoginUser.php"       class="gridImagesText"><img class="gridSizeImg" src="pic/picGrid/image1.png" alt=""><p class="pclass">Wood as a material</p></a></div>
    <div class="item20"><a href="simpleBuildsLoginUser.php"  class="gridImagesText"><img class="gridSizeImg" src="pic/picGrid/image2.png" alt=""><p class="pclass">Projects</p></a></div>
    <div class="item30"><a href="productsLoginUser.php"      class="gridImagesText"><img class="gridSizeImg" src="pic/picGrid/image3.png" alt=""><p class="pclass">Cut to size</p></a></div> 
    <div class="item40"><a href="contactLoginUser.php"       class="gridImagesText"><img class="gridSizeImg" src="pic/picGrid/image4.png" alt=""><p class="pclass">Burning questions</p></a></div>
    <div class="item50"><a href="contactLoginUser.php"       class="gridImagesText"><img class="gridSizeImg" src="pic/picGrid/image5.png" alt=""><p class="pclass">Ethically sourced</p></a></div>
    <div class="item60"><a href="contactLoginUser.php"       class="gridImagesText"><img class="gridSizeImg" src="pic/picGrid/image6.png" alt=""><p class="pclass">Helping you</p></a></div>
  </div>
  </div>
  












 <footer>
    <a class="footerSty" href="contactLoginUser.php">Delivery</a>
    <a class="footerSty" href="contactLoginUser.php">Customer Service</a>
    <a class="footerSty" href="contactLoginUser.php">Payment Methods</a>
    <a class="footerSty" href="contactLoginUser.php">Careers</a>
    <a class="footerSty" href="contactLoginUser.php">Make Money with Us</a>
    <a class="footerSty" href="contactLoginUser.php">PRIVACY POLICY</a>
 </footer>
</body>
</html>