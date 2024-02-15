const className = 'nav-item-focused';
const toggleMobileNavBtn = document.getElementById('toggle-mobile-nav-button');
const menuOpen = document.getElementById('menu-icon');
const navbarLinks = document.getElementById('navbar-links');
const menuClose =  document.getElementById('close-icon');
let lastClickedSection = null;

window.addEventListener("scroll", function() {
    // Check if the last clicked section is currently not in view
    if (lastClickedSection && !isElementInViewport(document.getElementById(lastClickedSection))) {
        // reset last clicked section
        lastClickedSection = null;
    }
});

// Click event on nav items.
document.querySelectorAll('.nav-item').forEach(item => (
    item.addEventListener('click', (event) => {
        let navItem = event.target.closest('.nav-item');
        let mobile = navItem.classList.contains('mobile-nav');

        switch (navItem.id) {
            case 'mainNav' :
            case 'aboutLink':
                navigate('about', mobile);
                break;
            case 'homeLink' :
                navigate('home', mobile);
                break;
            case 'skillsLink' :
                navigate('skills', mobile);
                break;
            case 'projectsLink' :
                navigate('projects', mobile);
                break;
            case 'contactLink' :
                navigate('contact', mobile);
                break;
        }

        if (navItem.id === 'mainNav') {
            focused(document.getElementById('aboutLink'));
        } else {
            focused(navItem);
        }
    }))
);

toggleMobileNavBtn.addEventListener('click', () => {
    toggleMenuButton();
    toggleMenu();
});

function navigate(section, mobile = true) {
    if (mobile) {
        toggleMenuButton();
        toggleMenu();
    }

    if (lastClickedSection !== section) {
        document.getElementById(section).scrollIntoView();
        lastClickedSection = section;
    }
}

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

function toggleMenuButton() {
    menuOpen.classList.toggle('hidden');
    menuClose.classList.toggle('hidden');
}

function toggleMenu() {
    navbarLinks.classList.toggle('hidden');
}

function isElementInViewport(el) {
    let rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}
