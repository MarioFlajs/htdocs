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
<body class="letter">



  <div class="header" >
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
          <li class="navList"><a href="promotion.php">Promotion</a></li>
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
  
<div class="letterOfBody">
<h1>Email:</h1><h2>woodbording@woodbording.ie</h2>
<br>
<h1>Number:</h1><h2>+353 20 910 4367</h2>
<br>
<h1>Instagram:</h1><h2>Woodbording</h2>







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