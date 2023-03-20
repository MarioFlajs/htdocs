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
 

  <div class="header" id="hederLogo">
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

              <input class="searchInput" type="text"  placeholder="Search..Oak, Saw.." name="search" id="searchInput"  />

              <button class="searchMag" type="submit">Search</button>

              </form></li>
          <li style="float:right" class="navList"><a href="#about">About</a></li>
        </ul>
    </nav>
  </div>
    <br>

  <div class="body">

<div class="grid-container-prod">
     

      <div class="item1"><img class="gridSizeImgProd" src="pic/picProducts/tool/table.png" alt=""><p class="pcla"><b>Wooden Work Bench </b>  version of a traditional woodworking bench. This bench is constructed from quality beech much harder wearing than standard softwood benches. <br><br>Quantity 1: <b class="strikethrough">350.00</b> Only 280  &#8364  <br><br>
        <label for="length_mm">Quantity: </label><input type="number" name="bench" id="bench" oninput="CalculateNumBench()" min="1" max="9999">
        
        =
        <date class="toolPrice" id="result7">Price</date> &#8364 <data type="number" id="result77" ></data>
        
               
      </p>

      
      </div>

      <div class="item1"><img class="gridSizeImgProd" src="pic/picProducts/tool/screwdriver.png" alt=""><p class="pcla"><b>Screwdriver</b>, cushion grip screwdriver from Stanley features a large diameter handle that offers greater torque. It reduces the chance of breakage with the high-grade bar and features a magnetic tip for easy screw pick-up. <br><br>Quantity 1: <b class="strikethrough">15.00</b> Only 12.00 &#8364; <br><br>
        <label for="length_mm">Quantity: </label><input class="toolPrice" type="number" name="screwdriver" id="screwdriver" oninput="CalculateNumScrewdriver()" min="1" max="9999">
        
        =
        <date id="result8">Price</date> &#8364;
       
        
      </p>

      
      </div>

      <div class="item1"><img class="gridSizeImgProd" src="pic/picProducts/tool/hammer.png" alt=""><p class="pcla"><b>Hammer</b>, shaft is made from tubular steel for enhanced durability and rust resistance. The hammer head is fully polished and forged for strength and durability, so you have the confidence to use this hammer for your everyday jobs. <br><br>Quantity 1: <b class="strikethrough">14.00</b> Only 11.00 &#8364; <br><br>
        <label for="length_mm">Quantity: </label><input class="calc_mm" type="number" name="hammer" id="hammer" oninput="CalculateNumHammer()" min="1" max="9999">
        
        =
        <date id="result9">Price</date> &#8364;
       
        
      </p>

      
      </div>

      <div class="item1"><img class="gridSizeImgProd" src="pic/picProducts/tool/circularsaw.png" alt=""><p class="pcla"><b>Circular saw</b>, Carbide-tipped saw blade for general purpose cutting. Includes extension tables for increased support on large cuts. <br><br>Quantity 1: <b class="strikethrough">210.00</b> Only 168.00 &#8364; <br><br>
        <label for="length_mm">Quantity: </label><input class="calc_mm" type="number" name="circularsaw" id="circularsaw" oninput="CalculateNumCircularSaw()" min="1" max="9999">
        
        =
        <date id="result10">Price</date> &#8364;
      
        
      </p>

     
      </div>

      <div class="item1"><img class="gridSizeImgProd" src="pic/picProducts/tool/chisel.png" alt=""><p class="pcla"><b>Chisel</b>, High quality wood chisel with hardened and annealed blade. Slow to blunt or rust and sharpened ready for use. Striking cap prolongs life and prevents handle mushrooming. <br><br>Quantity 1: <b class="strikethrough">8.00</b> Only 6.00 &#8364; <br><br>
        <label for="length_mm">Quantity: </label><input class="calc_mm" type="number" name="chisel" id="chisel" oninput="CalculateNumChisel()" min="1" max="9999">
        
        =
        <date id="result11">Price</date> &#8364;
     
        
      </p>

      
      </div>

      <div class="item1"><img class="gridSizeImgProd" src="pic/picProducts/tool/saw.png" alt=""><p class="pcla"><b>Saw</b>, manufactured from high quality 1mm carbon steel, thats been correctly hardened, tempered, straightened and stress relieved to ensure the blades strength and straightness while the double ground set of the saw tooth. <br><br>Quantity 1: <b class="strikethrough">11.00</b> Only 8.00 &#8364; <br><br>
        <label for="length_mm">Quantity: </label><input class="calc_mm" type="number" name="saw" id="saw" oninput="CalculateNumSaw()" min="1" max="9999">
        
        =
        <date id="result12">Price</date> &#8364;
      
        
      </p>

      
      </div>

     

  </div>
  


 <footer id="footer">
    <a class="footerSty" href="contact.php">Delivery</a>
    <a class="footerSty" href="contact.php">Customer Service</a>
    <a class="footerSty" href="contact.php">Payment Methods</a>
    <a class="footerSty" href="contact.php">Careers</a>
    <a class="footerSty" href="contact.php">Make Money with Us</a>
    <a class="footerSty" href="contact.php">PRIVACY POLICY</a>
 </footer>
 <script src="woodCalculator.js"></script>
</body>
</html>