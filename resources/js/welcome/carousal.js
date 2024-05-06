const prevButton = document.getElementById('slide-arrow-prev');
const nextButton = document.getElementById('slide-arrow-next');
const carouselInner = document.querySelector('.carousel-inner');
const carouselItems = document.querySelectorAll('.carousel-item');
let currentIndex = 0;
let itemWidth;

// Function to update itemWidth based on current window size
function updateItemWidth() {
    itemWidth = carouselItems[0].offsetWidth + parseInt(window.getComputedStyle(carouselItems[0]).marginRight);
    carouselInner.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
}

// Set initial position
updateItemWidth();

// Update itemWidth when window resizes
window.addEventListener('resize', updateItemWidth);

function showNextSlide() {
    if (currentIndex < carouselItems.length - 1) {
        currentIndex++;
        carouselInner.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
    }
}

function showPrevSlide() {
    if (currentIndex > 0) {
        currentIndex--;
        carouselInner.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
    }
}

nextButton.addEventListener('click', showNextSlide);
prevButton.addEventListener('click', showPrevSlide);
