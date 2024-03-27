let animationTriggered = false;
const bars = document.getElementById('bars');
const aboutObserver = new IntersectionObserver(handleIntersection, {
    root: null,
    rootMargin: '0px',
    threshold: 0.8
});

// Observe the #about section
aboutObserver.observe(document.getElementById('skills'));

bars.style.opacity = '0';

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
    bars.style.opacity = '1';
    bars.classList.add('animate-bars');
}
