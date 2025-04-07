<?php require_once 'functions.php'; ?>


<link rel="stylesheet" href="../CSS/navbar.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<footer class="modern-footer">
  <div class="footer-content">
    <div class="footer-logo">
      <h2><i class='bx bx-camera-movie'></i> Mo-View</h2>
      <p>Your daily dose of cinematic excellence.</p>
    </div>
    <div class="footer-links">
      <div>
        <h4>Explore</h4>
        <ul>
          <li><a href="../PHP/index.php">Home</a></li>
          <li><a href="#">Top Picks</a></li>
          <li><a href="#">Genres</a></li>
          <li><a href="#">Reviews</a></li>
        </ul>
      </div>
      <div>
        <h4>Support</h4>
        <ul>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms</a></li>
        </ul>
      </div>
      <div>
        <h4>Follow Us</h4>
        <div class="social-icons">
          <a href="#"><i class='bx bxl-facebook'></i></a>
          <a href="#"><i class='bx bxl-twitter'></i></a>
          <a href="#"><i class='bx bxl-instagram'></i></a>
          <a href="#"><i class='bx bxl-youtube'></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; <?= date('Y'); ?> Mo-View. Made with ❤️ for movie lovers.</p>
  </div>
</footer>