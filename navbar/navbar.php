<?php require_once 'functions.php'; ?>


<link rel="stylesheet" href="../CSS/navbar.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<nav class="navbar">
<div class="logo">
        <img src="../Assets/logo.jpg" alt="Mo-view Logo" />
        <h1>Mo-view</h1>
    </div>
    <ul class="nav-links">
        <li class="<?= isActive('index.php'); ?>"><a href="index.php">Home</a></li>
        <li class="<?= isActive('movies.php'); ?>"><a href="movies.php">Movies</a></li>
        <li class="<?= isActive('series.php'); ?>"><a href="series.php">Series</a></li>
        <li class="<?= isActive('about.php'); ?>"><a href="about.php">About</a></li>
        <li class="<?= isActive('contact.php'); ?>"><a href="contact.php">Contact</a></li>
    </ul>
    <div class="search-icon">
        <i class="bx bx-search"></i>
        <input type="text" class="search-bar" placeholder="Search...">
    </div>
    <div class="profile">
        <i class="bx bx-user"></i>
    </div>
</nav>



