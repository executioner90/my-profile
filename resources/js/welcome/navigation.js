const className = 'nav-item-focused';
const toggleMobileNavBtn = document.getElementById('toggle-mobile-nav-button');
const menuOpen = document.getElementById('menu-icon');
const navbarLinks = document.getElementById('navbar-links');
const menuClose =  document.getElementById('close-icon');
let lastClickedSection = null;

window.addEventListener("scroll", function() {
    let scrollPosition = window.scrollY;
    let sections = document.querySelectorAll(".section");
    let id = '';

    for (let i = 0; i < sections.length; i++) {
        let div = sections[i];
        let offsetTop = div.offsetTop - 350;
        let offsetBottom = offsetTop + div.offsetHeight;

        if (offsetTop <= scrollPosition && offsetBottom >= scrollPosition) {
            switch (div.id) {
                case 'home':
                    id = 'homeLink';
                    break;
                case 'skills':
                    id = 'skillsLink';
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

    if (!isDesktopNavHidden()) {
        focused(document.getElementById(id));
    }

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
            case 'skillsLink':
                navigate('skills', mobile);
                break;
            case 'homeLink' :
                navigate('home', mobile);
                break;
            case 'aboutLink' :
                navigate('about', mobile);
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
    // prevent double-clicking before navigating finish
    document.querySelector('html').style.overflow = 'hidden';
    if (mobile) {
        toggleMenuButton();
        toggleMenu();
    }

    if (lastClickedSection !== section) {
        document.getElementById(section).scrollIntoView();
        lastClickedSection = section;
    }

    // Allow scrolling/clicking again
    setTimeout(() => {
        document.querySelector('html').style.overflow = 'auto'
    }, 1000);
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
    navbarLinks.classList.toggle('closed');
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

function isDesktopNavHidden() {
    const desktopNavElement = document.querySelector('.desktop-nav');
    const computedStyle = window.getComputedStyle(desktopNavElement);

    return computedStyle.display === 'none';
}
