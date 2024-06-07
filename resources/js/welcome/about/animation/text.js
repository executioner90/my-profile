let animationTriggered = false;
const text = document.getElementById('text');
const aboutObserver = new IntersectionObserver(handleIntersection, {
    root: null,
    rootMargin: '0px',
    threshold: 0.8
});

// Observe the #about section
aboutObserver.observe(document.getElementById('about'));

text.style.opacity = '0';

function handleIntersection(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting && !animationTriggered) {
            animate();
            observer.unobserve(entry.target);
        }
    });
}

function animate() {
    if (animationTriggered) {
        return;
    }

    animationTriggered = true;

    // Trigger animation
    text.style.opacity = '1';
    text.classList.add('animate-text');
}
