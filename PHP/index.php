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
            <div class="product-card" onclick="openModal(`<?= htmlspecialchars(json_encode($top), ENT_QUOTES, 'UTF-8'); ?>`)">
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


    <!-- Modal for Top Picks -->
    <div id="movieModal" class="modal-overlay" onclick="closeModal(event)">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal(event)">&times;</span>
        <img id="modalPoster" src="" alt="Movie Poster">
        <div class="modal-details">
            <h2 id="modalTitle"></h2>
            <div class="genre-year-rating">
                <span class="genre-tag" id="modalGenre"></span>
                <span id="modalYear"></span> • 
                <span>⭐ <span id="modalRating"></span></span>
            </div>
            <p id="modalDescription"></p>
            <button class="play-btn">
                ▶ Play Trailer
            </button>
        </div>
    </div>
</div>


 <!-- for you -->
 <div class="category-container">
            <h2 class="head2">For You</h2>
    <div class="scroll-wrapper">
            <button class="scroll-btn left-btn" onclick="scrollLeft('for-you-container')">&#9664;</button>
        <div class="for-you-container" id="for-you-container">
        <?php foreach ($foryous as $foryou): ?>
                <div class="product-card" onclick="openModal(`<?= htmlspecialchars(json_encode($foryou), ENT_QUOTES, 'UTF-8'); ?>`)">
                    <img src="<?= $foryou['image']; ?>" alt="<?= $foryou['title']; ?>" class="movie-poster">
                    <div class="movie-info">
                        <h3><?= $foryou['title']; ?></h3>
                        <p><?= $foryou['genre']; ?> | <?= $foryou['year']; ?></p>
                        <p>⭐ <?= $foryou['rating']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
            <button class="scroll-btn right-btn" onclick="scrollRight('for-you-container')">&#9654;</button>
     </div>      
 </div>

 <!-- popular movies -->
 <div class="category-container">
            <h2 class="head2">Popular Movies</h2>
            <div class="scroll-wrapper">
            <button class="scroll-btn left-btn" onclick="scrollLeft('popular-container')">&#9664;</button>
        <div class="popular-container" id="popular-container">
        <?php foreach ($populars as $popular): ?>
                <div class="product-card" onclick="openModal(`<?= htmlspecialchars(json_encode($popular), ENT_QUOTES, 'UTF-8'); ?>`)">
                    <img src="<?= $popular['image']; ?>" alt="<?= $popular['title']; ?>" class="movie-poster">
                    <div class="movie-info">
                        <h3><?= $popular['title']; ?></h3>
                        <p><?= $popular['genre']; ?> | <?= $popular['year']; ?></p>
                        <p>⭐ <?= $popular['rating']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
            <button class="scroll-btn right-btn" onclick="scrollRight('popular-container')">&#9654;</button>
     </div>      
 </div>

 <!-- Adventure movies -->
 <div class="category-container">
            <h2 class="head2">Adventure Movies</h2>
            <div class="scroll-wrapper">
            <button class="scroll-btn left-btn" onclick="scrollLeft('adventure-container')">&#9664;</button>
        <div class="adventure-container" id="adventure-container">
        <?php foreach ($adventures as $adventure): ?>
                <div class="product-card" onclick="openModal(`<?= htmlspecialchars(json_encode($adventure), ENT_QUOTES, 'UTF-8'); ?>`)">
                    <img src="<?= $adventure['image']; ?>" alt="<?= $adventure['title']; ?>" class="movie-poster">
                    <div class="movie-info">
                        <h3><?= $adventure['title']; ?></h3>
                        <p><?= $adventure['genre']; ?> | <?= $adventure['year']; ?></p>
                        <p>⭐ <?= $adventure['rating']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
            <button class="scroll-btn right-btn" onclick="scrollRight('adventure-container')">&#9654;</button>
     </div>      
 </div>

 <!-- Comedies -->
 <div class="category-container">
            <h2 class="head2">Comedies</h2>
            <div class="scroll-wrapper">
            <button class="scroll-btn left-btn" onclick="scrollLeft('comedies-container')">&#9664;</button>
        <div class="comedies-container" id="comedies-container">
        <?php foreach ($comedies as $comedie): ?>
                <div class="product-card" onclick="openModal(`<?= htmlspecialchars(json_encode($comedie), ENT_QUOTES, 'UTF-8'); ?>`)">
                    <img src="<?= $comedie['image']; ?>" alt="<?= $comedie['title']; ?>" class="movie-poster">
                    <div class="movie-info">
                        <h3><?= $comedie['title']; ?></h3>
                        <p><?= $comedie['genre']; ?> | <?= $comedie['year']; ?></p>
                        <p>⭐ <?= $comedie['rating']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
            <button class="scroll-btn right-btn" onclick="scrollRight('comedies-container')">&#9654;</button>
     </div>      
 </div>

<!-- Crime action movies -->
 <div class="category-container">
            <h2 class="head2">Crime Action Movies</h2>
            <div class="scroll-wrapper">
            <button class="scroll-btn left-btn" onclick="scrollLeft('crime-container')">&#9664;</button>
        <div class="crime-container" id="crime-container">
        <?php foreach ($crimes as $crime): ?>
                <div class="product-card" onclick="openModal(`<?= htmlspecialchars(json_encode($crime), ENT_QUOTES, 'UTF-8'); ?>`)">
                    <img src="<?= $crime['image']; ?>" alt="<?= $crime['title']; ?>" class="movie-poster">
                    <div class="movie-info">
                        <h3><?= $crime['title']; ?></h3>
                        <p><?= $crime['genre']; ?> | <?= $crime['year']; ?></p>
                        <p>⭐ <?= $crime['rating']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
            <button class="scroll-btn right-btn" onclick="scrollRight('crime-container')">&#9654;</button>
     </div>      
 </div>

     <?php include("../navbar/footer.php"); ?>
    <script src="../JAVA/index.js"></script>
</body>
</html>