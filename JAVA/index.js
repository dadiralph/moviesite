document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".slide");
    const indicators = document.querySelectorAll(".indicator");
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");
    let currentIndex = 0;
    let interval;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove("active"); // Hide all slides
            indicators[i].classList.remove("active"); // Remove active from indicators
        });

        slides[index].classList.add("active"); // Show the current slide
        indicators[index].classList.add("active"); // Highlight the current indicator
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    }

    function startAutoSlide() {
        interval = setInterval(nextSlide, 9000); // Change slide every 9 seconds
    }

    function stopAutoSlide() {
        clearInterval(interval);
    }

    nextBtn.addEventListener("click", () => {
        nextSlide();
        stopAutoSlide();
        startAutoSlide();
    });

    prevBtn.addEventListener("click", () => {
        prevSlide();
        stopAutoSlide();
        startAutoSlide();
    });

    indicators.forEach((indicator, i) => {
        indicator.addEventListener("click", () => {
            currentIndex = i;
            showSlide(currentIndex);
            stopAutoSlide();
            startAutoSlide();
        });
    });

    showSlide(currentIndex);
    startAutoSlide();
});




// JavaScript for the "Learn More" button//

document.addEventListener("DOMContentLoaded", function () {
    function setupInfiniteScroll(containerId) {
        const container = document.getElementById(containerId);
        const cards = [...container.children];
        const scrollAmount = cards[0].offsetWidth + 20; // Adjust based on card width & gap

        // Duplicate first and last items for seamless looping
        container.appendChild(cards[0].cloneNode(true)); // Clone first item
        container.insertBefore(cards[cards.length - 1].cloneNode(true), cards[0]); // Clone last item

        function scrollLeft() {
            container.style.transition = "transform 0.2s ease-in-out";
            container.style.transform = `translateX(${scrollAmount}px)`;

            setTimeout(() => {
                container.style.transition = "none";
                container.insertBefore(container.lastElementChild, container.firstElementChild);
                container.style.transform = "translateX(0)";
            }, 500);
        }

        function scrollRight() {
            container.style.transition = "transform 0.2s ease-in-out";
            container.style.transform = `translateX(-${scrollAmount}px)`;

            setTimeout(() => {
                container.style.transition = "none";
                container.appendChild(container.firstElementChild);
                container.style.transform = "translateX(0)";
            }, 500);
        }

        // Attach event listeners to the buttons
        const leftButton = document.querySelector(`.left-btn[onclick="scrollLeft('${containerId}')"]`);
        const rightButton = document.querySelector(`.right-btn[onclick="scrollRight('${containerId}')"]`);

        leftButton.addEventListener("click", scrollLeft);
        rightButton.addEventListener("click", scrollRight);
    }

    // Apply the infinite scroll for each category container
    setupInfiniteScroll("toppick-container");
    setupInfiniteScroll("for-you-container");
    setupInfiniteScroll("popular-container");
    setupInfiniteScroll("adventure-container");
    setupInfiniteScroll("comedies-container");
    setupInfiniteScroll("crime-container");
});








function openModal(data) {
    const movie = JSON.parse(data);

    // Set modal content dynamically
    document.getElementById('modalPoster').src = movie.image;
    document.getElementById('modalTitle').textContent = movie.title;
    document.getElementById('modalGenre').textContent = movie.genre;
    document.getElementById('modalYear').textContent = movie.year;
    document.getElementById('modalRating').textContent = movie.rating;
    document.getElementById('modalDescription').textContent = movie.description;

    // Show the modal
    document.getElementById('movieModal').style.display = 'flex';
}

function closeModal(event) {
    if (event.target.id === 'movieModal' || event.target.classList.contains('close-btn')) {
        document.getElementById('movieModal').style.display = 'none';
    }
}

// Event listener for the play trailer button
document.querySelector('.play-btn').addEventListener('click', function(e) {
    e.stopPropagation(); // Prevent the event from bubbling up
    alert("Trailer playing..."); // Placeholder for actual trailer logic
});

// Prevent modal from opening automatically on page load
document.addEventListener('DOMContentLoaded', function () {
    // Ensure modal is not visible on page load
    document.getElementById('movieModal').style.display = 'none';
});

// Add event listeners to movie cards
document.querySelectorAll('.product-card').forEach(card => {
    card.addEventListener('click', function () {
        const movie = {
            title: card.querySelector('h3').textContent,
            image: card.querySelector('img').src,
            genre: card.querySelector('.genre').textContent,
            year: card.querySelector('.year').textContent,
            rating: card.querySelector('.rating').textContent,
            description: 'Some brief description about the movie goes here.'
        };

        openModal(JSON.stringify(movie)); // Open the modal with the movie data
    });
})