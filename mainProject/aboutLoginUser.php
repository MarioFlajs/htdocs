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
<body class="generalImg">



  <div class="header" >
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
  
<div class="letterOfGeneral" >
  <img src="pic/general.png" alt="" class="general">
<h1>About us:</h1><h2>WoodBoarding is one of Irelands largest suppliers of quality woodworking tools and supplies. Since we opened in May 2022 The WoodBoarding has grown into a trusted source for woodworkers.  The store offers superior products, expert advice, a wide range of demonstrations and events throughout the year. Our Woodwork, Hobby and Craft Fair is now attracting people with a passion for wood from all over Ireland, the U.K. and beyond. A visit to our store is a must.</h2>











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