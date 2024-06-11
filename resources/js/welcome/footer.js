const button = document.getElementById('scrollToTop');

button.addEventListener('click', function () {
    document.querySelector('html').style.overflow = 'hidden';
    scrollTo(0, 0);

    // Allow scrolling/clicking again
    setTimeout(() => {
        document.querySelector('html').style.overflow = 'auto'
    }, 1000);
});
