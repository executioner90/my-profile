const className = 'nav-item-focused';

window.addEventListener("scroll", function() {
    // Prevent clicking
    document.querySelector('body').style.pointerEvents = 'none';

    let scrollPosition = window.scrollY;
    let parentDivs = document.querySelectorAll("body > div");
    let id = '';

    for (let i = 0; i < parentDivs.length; i++) {
        let div = parentDivs[i];
        let offsetTop = div.offsetTop - 500;
        let offsetBottom = offsetTop + div.offsetHeight;

        if (offsetTop <= scrollPosition && offsetBottom >= scrollPosition) {
            switch (div.id) {
                case 'home':
                    id = 'homeLink';
                    break;
                case 'about':
                    id = 'aboutLink';
                    break;
                case 'projects':
                    id = 'projectsLink';
                    break;
                case 'contact':
                    id = 'contactLink';
                    break;
            }
        }
    }

    focused(document.getElementById(id));

    // Reset pointer event
    setTimeout(function () {
        document.querySelector('body').style.pointerEvents = 'auto';
    }, 500);
});

function focused(element) {
    // Reset the styles of all navigation links
    document.querySelectorAll('.navbar div').forEach(link => {
        link.classList.remove(className);
    });

    // Apply styles to the focused link
    if (element) {
        element.classList.add(className);
    }
}
