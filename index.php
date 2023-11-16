<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="https://kit.fontawesome.com/7d66a8729a.js" crossorigin="anonymous"></script>
  <title>Textile Management System</title>
</head>
<body>
  <nav class="nav-item">
		<ul class="bar-list">
      <li class="bars"><i class="fa-solid fa-bars"></i></li>
			<li class="nav-links"><a href="index.php">Home</a></li>
			<li class="nav-links"><a href="menu.php">Menu</a></li>
			<li class="nav-links"><a href="about.php">About</a></li>
			<li class="nav-links"><a href="contact.php">Contact</a></li>
      <li class="nav-links"><a href="gifts.php">Gifts</a></li>
     
		</ul>
    <img  class="logo-image" src="assets/logo.png" alt="Logo">
	</nav>

  <div class="carousel">
    <div class="carousel-content">
      <div class="carousel-part">
        <div class="carousel-text">
          <h2>New! Crunchy Chicken</h2>
          <p>Find out all about our new crispy chicken sandwich.</p>
          <button>CRUNCH! CRUNCH!</button>
        </div>
        <div class="carousel-image">
          <img src="assets/logo.png" alt="Image">
        </div>
      </div>
      <div class="carousel-part">
        <div class="carousel-text">
          <h2>Checkout our New Offer!</h2>
          <p>We have a new offer for our existing customers.</p>
          <button>CRUNCH! CRUNCH!</button>
        </div>
        <div class="carousel-image">
          <img src="assets/logo.png" alt="Image">
        </div>
      </div>
    </div>
  </div>

  <section class="card-section">
    <h2>Fresh Mexican Grill</h2>
    <div class="card-container">
      <div class="card">
        <img src="assets/food-item1.jpeg" alt="Image 1">
        <h3>FIND A LOCATION</h3>
      </div>
      <div class="card">
        <img src="assets/food-item2.jpeg" alt="Image 2">
        <h3>EARN FREE BURRITOS</h3>
      </div>
      <div class="card">
        <img src="assets/food-item3.jpeg" alt="Image 3">
        <h3>CATERING OPTIONS</h3>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-row-1">
      <div class="footer-logo">
        <img src="assets/logo2.png" alt="Logo">
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
          <li><a href="about.html">About</a></li>
          <li><a href="menu.html">Menu</a></li>
          <li><a href="#">Catering</a></li>
          <li><a href="#">News</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <ul>
          <li><a href="#">Locations</a></li>
          <li><a href="#">Franchise</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <ul>
          <li><a href="#">Nutrition Information</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Site Map</a></li>
          <li><a href="#">Accessibility</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="footer-row">
      <p>Copyright &copy; 2023 BarBurrto. All rights reserved.</p>
    </div>
  </footer>
  <script>
    const barButton = document.getElementsByClassName('bars')[0];
    const list= document.getElementsByClassName('nav-links')
    barButton.addEventListener('click', function(){
      for (var i=0; i< list.length; i++)
      list[i].classList.toggle('active');

     
    })
    
  </script>
</body>
</html>