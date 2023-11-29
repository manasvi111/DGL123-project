<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="https://kit.fontawesome.com/7d66a8729a.js" crossorigin="anonymous"></script>
  <title>Menu</title>
</head>
<body>
  <nav>
		<ul>
    <li class="nav-links"><a href="index.php">Home</a></li>
			<li class="nav-links"><a href="menu.php">Fabrics</a></li>
			<li class="nav-links"><a href="about.php">About</a></li>
			<li class="nav-links"><a href="contact.php">Contact</a></li>
      <li class="nav-links"><a href="gifts.php">Career</a></li>
		</ul>
		<img src="assets/logo.png" alt="Logo">
	</nav>

  <div class="background-image">
    
    <img src="assets/.jfif" alt="Image">
        
  </div>

  <section class="hero-section">
    <h1 class="hero-title">iTextiles Fabrics</h1>
    <p class="hero-copy">At iTextiles, we cater to the needs of designers, artists, and creators looking for that perfect fabric to bring their visions to life.</p>
    <a href="#" class="hero-link">VIEW PRICING & ORDER NOW!<i class="fa fa-arrow-right hero-icon"></i></a>
  </section>

  <section class="menu-section">
    <div class="menu-section-copy">
      <h1>Silky</h1>
      <h1>Fabric</h1>
      <h1>Varieties</h1>
      <p>Our NEWEST edition to our collection. Try it in each an every way.</p>
      <a>VIEW PRICING & ORDER NOW</a>
    </div>
    <div class="menu-section-image">
      <img src="assets/silk.jfif" height="300px"/>
    </div>
    <div></div>
  </section>

  <section class="menu-dishes-section">
    <div>
      <h2>
        COTTON VARIETIES
      </h2>
      <p>Pima Cotton</p>
      <p>Egyptian Cotton</p>
      <p>Upland Cotton</p>
    </div>
  </section>

  <?php
// (A) INIT
/*$varA = ["Hello", "World", "Foo", "Bar"];
$varB = "";

// (B) CONCAT
foreach ($varA as $txt) { $varB .= $txt; }

// (C) DISPLAY & STOP HERE
print_r($varA);
echo $varB;
exit();

// (D) MORE PROCESSING
$varA[] = "Doge";
$varB .= "Last";
*/
?>

  <section class="menu-section">
    <div class="menu-section-copy">
      <h1>COMFORT &</h1>
      <h1>STYLISH</h1>
      <p>Our cottons combine everything you love about old-fashioned or modern society mixture with a new twist.</p>
      <a>VIEW PRICING & ORDER NOW</a>
    </div>
    <div class="menu-section-image">
      <img src="assets/cotton.jfif" height="300px"/>
    </div>
    <div></div>
  </section>

 

  <footer class="footer">
    <div class="footer-row-1">
      <div class="footer-logo">
        <img src="assets/logo.png" alt="Logo">
      </div>
      <div class="footer-social">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
    <div class="footer-row">
      <div class="footer-section">
        <ul>
          <li><a href="about.php">About</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="#">Catering</a></li>
          <li><a href="#">News</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <ul>
          <li><a href="#">Locations</a></li>
          <li><a href="#">Franchise</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <ul>
          <li><a href="#">Fabric Raw material Information</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Site Map</a></li>
          <li><a href="#">Accessibility</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="footer-row">
      <p>Copyright &copy; 2023 Textile Company. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>