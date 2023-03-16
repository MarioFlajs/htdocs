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
          <li class="navList"><a href="#contact">Promotion</a></li>
          <li class="navList"><a href="#contact">Simple Builds</a></li>
          
          <li class="navList"><a href="#contact">Contact</a></li>
          <li class="navList">
            <form class="searchForm" action="">

              <input class="searchInput" type="text"  placeholder="Search..Oak, Saw.." name="search" id="searchInput"  />

              <button class="searchMag" onclick="search_items()" type="submit">Search</button>

              </form></li>
          <li style="float:right" class="navList"><a href="#about">About</a></li>
        </ul>
    </nav>
  </div>
    <br>

  <div class="body">
<h2 class="smallTitle">WoodBoarding Lumber</h2>
    <div class="grid-container-prod"  >
      <div class="item1" name = 'ash' id = 'ash' data-item="wood"><img class="gridSizeImgProd" src="pic/picProducts/timber/planed-timber-american-ash-small.jpg" alt=""><p class="pcla"><b>Ash</b> wood is one of the most popular types of wood. It is considered a ductile wood with characteristics ranging from high calorific value to exceptional flexibility. <br><br>Quantity 1: 26mm x 25mm x 1m = 3.64 &#8364; <br><br>
        <label for="length_mm">Th. mm </label><input class="calc_mm" type="number" name="le_mm" id="AshLe_mm" min="26" max="9999">
        <label for="length_mm"> x Wi. mm </label><input class="calc_mm" type="number" name="wi_mm" id="AshWi_mm" min="25" max="9999">
        <label for="length_mm"> x Le. mm </label><input class="calc_mm" type="number" name="th_mm" id="AshTh_mm" min="1" max="9999">
        =
        <date id="result">Price</date> &#8364;
        <br>
         <input type="button" onClick="multiplyBy()" Value="Calculate" />
        
      </p>

      <a href="regPage.php" class="buyNow">Buy Now</a>
      </div>

      <div class="item1" name = 'cherry' id = 'cherry' data-item="wood"><img class="gridSizeImgProd" src="pic/picProducts/timber/planed-timber-american-cherry-small-v2.jpg" alt=""><p class="pcla"><b>Cherry</b> is easy to work with both machine and hand tools. The only difficulties typically arise if the wood is being stained, as it can sometimes give blotchy results due to its fine, close grain. A sanding sealer or gel stain is recommended. Glues, turns, and finishes well. <br><br>Quantity 1: 25mm x 25mm x 1m = 5.00 &#8364; <br><br>
        <label for="length_mm">Th. mm </label><input class="calc_mm" type="number" name="le_mm" id="cherryLe_mm" min="25" max="9999">
        <label for="length_mm"> x Wi. mm </label><input class="calc_mm" type="number" name="wi_mm" id="cherryWi_mm" min="25" max="9999">
        <label for="length_mm"> x Le. mm </label><input class="calc_mm" type="number" name="th_mm" id="cherryTh_mm" min="1" max="9999">
        =
        <date id="result2">Price</date> &#8364;
        <br>
         <input type="button" onClick="multiplyBycherry()" Value="Calculate" />
        
      </p>

      <a href="regPage.php" class="buyNow">Buy Now</a>
      </div>

      <div class="item1" name = 'walnut' data-item="wood"><img class="gridSizeImgProd" src="pic/picProducts/timber/planed-timber-american-black-walnut-small_38.jpg" alt=""><p class="pcla"><b>Walnut</b>, typically easy to work provided the grain is straight and regular. Planer tearout can sometimes be a problem when surfacing pieces with irregular or figured grain. Glues, stains, and finishes well, (though walnut is rarely stained). <br><br>Quantity 1: 25mm x 25mm x 1m = 12.50 &#8364; <br><br>
        <label for="length_mm">Th. mm </label><input class="calc_mm" type="number" name="le_mm" id="walnutLe_mm" min="25" max="9999">
        <label for="length_mm"> x Wi. mm </label><input class="calc_mm" type="number" name="wi_mm" id="walnutWi_mm" min="25" max="9999">
        <label for="length_mm"> x Le. mm </label><input class="calc_mm" type="number" name="th_mm" id="walnutTh_mm" min="1" max="9999">
        =
        <date id="result3">Price</date> &#8364;
        <br>
         <input type="button" onClick="multiplyByWalnut()" Value="Calculate" />
        
      </p>

      <a href="regPage.php" class="buyNow">Buy Now</a>
      </div>

      <div class="item1" name = 'oak' data-item="wood"><img class="gridSizeImgProd" src="pic/picProducts/timber/planed-timber-american-white-oak-small-v2.jpg" alt=""><p class="pcla"><b>Oak</b>, produces good results with hand and machine tools. Has moderately high shrinkage values, resulting in mediocre dimensional stability, especially in flatsawn boards. Can react with iron (particularly when wet) and cause staining and discoloration. Responds well to steam-bending. Glues, stains, and finishes well. <br><br>Quantity 1: 27mm x 27mm x 1m = 7.29 &#8364; <br><br>
        <label for="length_mm">Th. mm </label><input class="calc_mm" type="number" name="le_mm" id="oakLe_mm" min="27" max="9999">
        <label for="length_mm"> x Wi. mm </label><input class="calc_mm" type="number" name="wi_mm" id="oakWi_mm" min="27" max="9999">
        <label for="length_mm"> x Le. mm </label><input class="calc_mm" type="number" name="th_mm" id="oakTh_mm" min="1" max="9999">
        =
        <date id="result4">Price</date> &#8364;
        <br>
         <input type="button" onClick="multiplyByOak()" Value="Calculate" />
        
      </p>

      <a href="regPage.php" class="buyNow">Buy Now</a>
      </div>

      <div class="item1" name = 'beech' data-item="wood"><img class="gridSizeImgProd" src="pic/picProducts/timber/planed-timber-beech-small-v2.jpg" alt=""><p class="pcla"><b>Beech</b>, overall good workability; it machines well, and glues, finishes, and turns well. Beech also responds superbly to steam-bending. However, it does have a large amount of movement in service, so movement and wood stability must be taken into account. <br><br>Quantity 1: 25mm x 25mm x 1m = 7.50 &#8364; <br><br>
        <label for="length_mm">Th. mm </label><input class="calc_mm" type="number" name="le_mm" id="beechLe_mm" min="25" max="9999">
        <label for="length_mm"> x Wi. mm </label><input class="calc_mm" type="number" name="wi_mm" id="beechWi_mm" min="25" max="9999">
        <label for="length_mm"> x Le. mm </label><input class="calc_mm" type="number" name="th_mm" id="beechTh_mm" min="1" max="9999">
        =
        <date id="result5">Price</date> &#8364;
        <br>
         <input type="button" onClick="multiplyByBeech()" Value="Calculate" />
        
      </p>

      <a href="regPage.php" class="buyNow">Buy Now</a>
      </div>

      <div class="item1" name = 'maple' data-item="wood"><img class="gridSizeImgProd" src="pic/picProducts/timber/planed-timber-canadian-maple-small-v2.jpg" alt=""><p class="pcla"><b>Maple </b> considered to be reasonably easy to work with when using both hand and machine tools. It also glues and finishes very well, however, due to the high density of the wood, it may require a little extra work. Canadian Hard Maple can be polished and stained to create an exquisite finish. <br><br>Quantity 1: 20mm x 20mm x 1m = 12.00 &#8364; <br><br>
        <label for="length_mm">Th. mm </label><input class="calc_mm" type="number" name="le_mm" id="mapleLe_mm" min="20" max="9999">
        <label for="length_mm"> x Wi. mm </label><input class="calc_mm" type="number" name="wi_mm" id="mapleWi_mm" min="20" max="9999">
        <label for="length_mm"> x Le. mm </label><input class="calc_mm" type="number" name="th_mm" id="mapleTh_mm" min="1" max="9999">
        =
        <date id="result6">Price</date> &#8364;
        <br>
         <input type="button" onClick="multiplyByMaple()" Value="Calculate" />
        
      </p>

      <a href="regPage.php" class="buyNow">Buy Now</a>
      </div>












      <h2 class="smallTitle">WoodBoarding Tools</h2>

      <div class="item1"><img class="gridSizeImgProd" src="pic/picProducts/tool/table.png" alt=""><p class="pcla"><b>Wooden Work Bench </b>  version of a traditional woodworking bench. This bench is constructed from quality beech much harder wearing than standard softwood benches. <br><br>Quantity 1: <b class="strikethrough">350.00</b> Only 280  &#8364  <br><br>
        <label for="length_mm">Quantity: </label><input type="number" name="bench" id="bench" oninput="CalculateNumBench()" min="1" max="9999">
        
        =
        <date class="toolPrice" id="result7">Price</date> &#8364 <data type="number" id="result77" ></data>
        
               
      </p>

      <a href="regPage.php" class="buyNow">Buy Now</a>
      </div>

      <div class="item1"><img class="gridSizeImgProd" src="pic/picProducts/tool/screwdriver.png" alt=""><p class="pcla"><b>Screwdriver</b>, cushion grip screwdriver from Stanley features a large diameter handle that offers greater torque. It reduces the chance of breakage with the high-grade bar and features a magnetic tip for easy screw pick-up. <br><br>Quantity 1: <b class="strikethrough">15.00</b> Only 12.00 &#8364; <br><br>
        <label for="length_mm">Quantity: </label><input class="toolPrice" type="number" name="screwdriver" id="screwdriver" oninput="CalculateNumScrewdriver()" min="1" max="9999">
        
        =
        <date id="result8">Price</date> &#8364;
       
        
      </p>

      <a href="regPage.php" class="buyNow">Buy Now</a>
      </div>

      <div class="item1"><img class="gridSizeImgProd" src="pic/picProducts/tool/hammer.png" alt=""><p class="pcla"><b>Hammer</b>, shaft is made from tubular steel for enhanced durability and rust resistance. The hammer head is fully polished and forged for strength and durability, so you have the confidence to use this hammer for your everyday jobs. <br><br>Quantity 1: <b class="strikethrough">14.00</b> Only 11.00 &#8364; <br><br>
        <label for="length_mm">Quantity: </label><input class="calc_mm" type="number" name="hammer" id="hammer" oninput="CalculateNumHammer()" min="1" max="9999">
        
        =
        <date id="result9">Price</date> &#8364;
       
        
      </p>

      <a href="regPage.php" class="buyNow">Buy Now</a>
      </div>

      <div class="item1"><img class="gridSizeImgProd" src="pic/picProducts/tool/circularsaw.png" alt=""><p class="pcla"><b>Circular saw</b>, Carbide-tipped saw blade for general purpose cutting. Includes extension tables for increased support on large cuts. <br><br>Quantity 1: <b class="strikethrough">210.00</b> Only 168.00 &#8364; <br><br>
        <label for="length_mm">Quantity: </label><input class="calc_mm" type="number" name="circularsaw" id="circularsaw" oninput="CalculateNumCircularSaw()" min="1" max="9999">
        
        =
        <date id="result10">Price</date> &#8364;
      
        
      </p>

      <a href="regPage.php" class="buyNow">Buy Now</a>
      </div>

      <div class="item1"><img class="gridSizeImgProd" src="pic/picProducts/tool/chisel.png" alt=""><p class="pcla"><b>Chisel</b>, High quality wood chisel with hardened and annealed blade. Slow to blunt or rust and sharpened ready for use. Striking cap prolongs life and prevents handle mushrooming. <br><br>Quantity 1: <b class="strikethrough">8.00</b> Only 6.00 &#8364; <br><br>
        <label for="length_mm">Quantity: </label><input class="calc_mm" type="number" name="chisel" id="chisel" oninput="CalculateNumChisel()" min="1" max="9999">
        
        =
        <date id="result11">Price</date> &#8364;
     
        
      </p>

      <a href="regPage.php" class="buyNow">Buy Now</a>
      </div>

      <div class="item1"><img class="gridSizeImgProd" src="pic/picProducts/tool/saw.png" alt=""><p class="pcla"><b>Saw</b>, manufactured from high quality 1mm carbon steel, thats been correctly hardened, tempered, straightened and stress relieved to ensure the blades strength and straightness while the double ground set of the saw tooth. <br><br>Quantity 1: <b class="strikethrough">11.00</b> Only 8.00 &#8364; <br><br>
        <label for="length_mm">Quantity: </label><input class="calc_mm" type="number" name="saw" id="saw" oninput="CalculateNumSaw()" min="1" max="9999">
        
        =
        <date id="result12">Price</date> &#8364;
      
        
      </p>

      <a href="regPage.php" class="buyNow">Buy Now</a>
      </div>

     

  </div>
  


 <footer id="footer">
    <a class="footerSty" href="#home">Delivery</a>
    <a class="footerSty" href="#news">Customer Service</a>
    <a class="footerSty" href="#contact">Payment Methods</a>
    <a class="footerSty" href="#contact">Careers</a>
    <a class="footerSty" href="#contact">Make Money with Us</a>
    <a class="footerSty" href="#about">PRIVACY POLICY</a>
 </footer>
 <script src="woodCalculator.js"></script>
</body>
</html>