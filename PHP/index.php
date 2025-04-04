<?php 
include '../navbar/navbar.php'; 
include '../DATA/data.php'; // Include the data file containing the movie information
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mo-view</title>
    <link rel="icon" href="../Images/lowgow.png" />
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>  

<div class="banner">
    <div class="slider">
        <?php foreach ($banners as $index => $banner) { ?>
            <div class="slide <?php echo $index === 0 ? 'active' : ''; ?>">
                <div class="content">
                    <h2>Must-Watch <span>Movies</span></h2>
                    <h3><?php echo $banner["name"]; ?></h3>
                    <p><strong>Genre:</strong> <?php echo $banner["genre"]; ?></p>
                    <p><?php echo $banner["description"]; ?></p>
                    <a href="<?php echo $banner["movie_link"]; ?>" class="movie-link">Watch Now!</a>
                </div>
                <div class="image">
                    <img src="<?php echo $banner["image"]; ?>" alt="<?php echo $banner["name"]; ?>">
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Left and Right Navigation Buttons -->
    <button class="prev-btn">&#10094;</button>
    <button class="next-btn">&#10095;</button>

    <!-- Indicators -->
    <div class="indicators">
        <?php foreach ($banners as $index => $banner) { ?>
            <span class="indicator <?php echo $index === 0 ? 'active' : ''; ?>"></span>
        <?php } ?>
    </div>
</div>

 <!-- Categories Section -->
  <!-- Top picks -->
 <div class="category-container">
            <h2 class="head2">Top Picks</h2>
    <div class="scroll-wrapper">
            <button class="scroll-btn left-btn" onclick="scrollLeft('toppick-container')">&#9664;</button>
        <div class="toppick-container" id="toppick-container">
        <?php foreach ($tops as $top): ?>
                <div class="product-card">
                    <img src="<?= $top['image']; ?>" alt="<?= $top['title']; ?>" class="movie-poster">
                    <div class="movie-info">
                        <h3><?= $top['title']; ?></h3>
                        <p><?= $top['genre']; ?> | <?= $top['year']; ?></p>
                        <p>⭐ <?= $top['rating']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
            <button class="scroll-btn right-btn" onclick="scrollRight('toppick-container')">&#9654;</button>
     </div>        
 </div>


 <!-- for you -->
 <div class="category-container">
            <h2>For you</h2>


 </div>

 <!-- popular movies -->
 <div class="category-container">
            <h2>Popular Movies</h2>


 </div>

 <!-- Adventure movies -->
 <div class="category-container">
            <h2>Adventure Movies</h2>


 </div>

 <!-- Comedies -->
 <div class="category-container">
            <h2>Comedies</h2>


 </div>

<!-- Crime action movies -->
 <div class="category-container">
            <h2>Crime action movies</h2>


 </div>







    <script src="../JAVA/index.js"></script>
</body>


</html>