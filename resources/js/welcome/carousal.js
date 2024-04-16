const prevButton = document.getElementById('slide-arrow-prev');
const nextButton = document.getElementById('slide-arrow-next');
const carouselInner = document.querySelector('.carousel-inner');
const carouselItems = document.querySelectorAll('.carousel-item');
let currentIndex = 0;
const itemWidth = carouselItems[0].offsetWidth + parseInt(window.getComputedStyle(carouselItems[0]).marginRight);

// Set initial position
carouselInner.style.transform = `translateX(-${currentIndex * itemWidth}px)`;

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
