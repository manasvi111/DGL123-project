<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="https://kit.fontawesome.com/7d66a8729a.js" crossorigin="anonymous"></script>
  <title>About</title>
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
    
    <img src="assets/food-item2.jpeg" alt="Image">
        
  </div>
  <?php
// (A) CURL INIT
$curl = curl_init();
curl_setopt_array($curl, [
  CURLOPT_URL => "https://DOES-NOT-EXIST.com/dummy.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HEADER => false
]);

// (B) CURL FETCH
$result = curl_exec($curl);
if ($result === false) {
  error_log("Failed connecting to https://DOES-NOT-EXIST.com", 0);
}
curl_close($curl);
?>

  <section class="hero-section">
    <h1 class="hero-title">iTexiles HAS BEEN MODERN, DEMANDED & TRENDY</h1>
    <p class="hero-copy">At iTextiles, we believe that every thread we weave tells a story. Founded in 1995, our journey began with a vision to revolutionize the textile industry by blending traditional craftsmanship with modern techniques. Over the years, we have cultivated a legacy of excellence and innovation, becoming a hallmark in the world of textiles.</p>
    <a href="#" class="hero-link">Discover our location<i class="fa fa-arrow-right hero-icon"></i></a>
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