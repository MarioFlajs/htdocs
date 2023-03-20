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
<body class="toolsForWall">



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
  
<div class="toolOfBody">
<img class="sipPic" src="pic/shelf.jpg" alt="">
<div class="textForSip"><h2 >Estimeted Time Needed: 1 Hour</h2><h3>Making a simple wall shelt from wood is an easy project that wouldn't stress you out with heavy labor.</h3><h4>Tools</h4><ul><li>Drill</li><li>Saw</li><li>Sand Paper</li><li>Paintbrush</li></ul><h4>Materials</h4><ul><li>1 Board 26 x 30 x 1</li><li>Paint</li><li>Wood Scrow</li></ul><img class="imgInTxt" src="pic/blu1.jpg" alt=""></div>

<img class="sipPic" src="pic/MediaBox.jpg" alt="">
<div class="textForSip"><h2 >Estimeted Time Needed: 5 Hour</h2><h3>Create a stylish home for your television with this simple, good-looking stand. It offers space for a large flat-screen TV, and has additional space for components. Plus, theres extra space that you can use to house speakers or to display some of your favorite things.</h3><h4>Tools</h4><ul><li>Drill</li><li>Saw</li><li>Sand Paper</li><li>Paintbrush</li></ul><h4>Materials</h4><ul>
<li>4Board , 1x2 X 96"</li>
<li>1Board , 2x2 X 96"</li>
<li>2Board , 1x6 X 96"</li>
<li>1Board , 1x6 X 72"</li>
<li>2Board , 1x8 X 96"</li>
<li>1Plywood , 3/4" X 24" X 48"</li>
<li>1Plywood , 1/4" X 24" X 24"</li>
<li>Paint</li><li>Wood Scrow</li></ul><img class="imgInTxt" src="pic/tv.png" alt=""></div>

<img class="sipPic" src="pic/CookbookStand.jpg" alt="">
<div class="textForSip"><h2 >Estimeted Time Needed: 3 Hour</h2><h3>This handy kitchen bookstand holds even the largest cookbook conveniently to hand and open at the right place, yet it folds flat so you can store it out of the way when you've finished creating your culinary masterpiece.</h3><h4>Tools</h4><ul><li>Drill</li><li>Saw</li><li>Sand Paper</li><li>Paintbrush</li></ul><h4>Materials</h4><ul><li>1 Board 26 x 30 x 1</li><li>Paint</li><li>Wood Scrow</li></ul><img class="imgInTxt" src="pic/Stand.png" alt=""></div>







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