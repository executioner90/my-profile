let animationTriggered = false;
const elementsToAnimate = Array.from(document.querySelectorAll('#about .elements-to-animate'));
const aboutObserver = new IntersectionObserver(handleIntersection, {
    root: null,
    rootMargin: '0px',
    threshold: 0.8
});

// Observe the #about section
aboutObserver.observe(document.getElementById('about'));

elementsToAnimate.forEach(element => {
    // Hide elements initially
    element.style.opacity = '0';
});

function handleIntersection(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting && !animationTriggered) {
            animateAboutSection();
            observer.unobserve(entry.target);
        }
    });
}

function animateAboutSection() {
    if (animationTriggered) {
        return;
    }

    animationTriggered = true;

    // Remove any existing content in the columns
    elementsToAnimate.forEach(element => {
        element.style.opacity = '0';
    });

    // Sort the elements based on their class names
    elementsToAnimate.sort((a, b) => {
        const classA = a.className.split(' ').find(className => className.startsWith('show-'));
        const classB = b.className.split(' ').find(className => className.startsWith('show-'));
        const orderA = classA ? parseInt(classA.replace('show-', ''), 10) : 0;
        const orderB = classB ? parseInt(classB.replace('show-', ''), 10) : 0;

        return orderA - orderB;
    });

    // Trigger animation for each element with a delay
    elementsToAnimate.forEach((element, index) => {
        setTimeout(() => {
            element.style.opacity = '1';
            element.classList.add('animate-right');
        }, index * 200); // Adjust delay as needed
    });
}
