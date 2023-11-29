<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="https://kit.fontawesome.com/7d66a8729a.js" crossorigin="anonymous"></script>
  <title>Contact</title>
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

  <section class="hero-section">
    <h1 class="hero-title">Contact us at <br/> iTEXTILES</h1>
    <div class="hero-section-contact">
      <div>
        <img src="assets/contact-image-1.png" height="120px"/>
        <h4>Contact Information</h4>
        <h4>+ 1 949 949 4949</h4>
        <h4>info@itextiles.ca</h4>
      </div>
      <hr />
      <div>
        <img src="assets/contact-image-2.png" height="120px"/>
        <h4>Corporate Office</h4>
        <h4>1120 Finch Ave W. Suite 301.</h4>
        <h4>North York, ON. M3J 3H7</h4>
      </div>
    </div>
  </section>
  <div class="section-divider">
    <hr />
  </div>
  <section class="hero-section">
    <h1 class="hero-title">INQUIRIES</h1>
      <form class="contact-inquiries">
        <div class="form-control">
          <label>Your Name (required)</label>
          <input type="text"/>
        </div>
        <div class="form-control">
          <label>Your Email (required)</label>
          <input type="text"/>
        </div>
        <div class="form-control">
          <label>Your Phone number (optional)</label>
          <input type="text"/>
        </div>
        <div class="form-control">
          <label>Location Visited (optional)</label>
          <input type="text"/>
        </div>
        <div class="form-control">
          <label>Location Visited (optional)</label>
          <textarea type="text" rows="8"></textarea>
        </div>
        <div class="form-control">
          <button>Send Message</button>
        </div>
      </form>
  </section>
  <?php
    require "second.php";
    $testObj = new Test();
    $testObj->foo();
    class Test {
      function foo () {
        var_dump(debug_backtrace());
        debug_print_backtrace();
      }
  ?>
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