const className = 'nav-item-focused';
const toggleMobileNavBtn = document.getElementById('toggle-mobile-nav-button');
const menuOpen = document.getElementById('menu-icon');
const navbarLinks = document.getElementById('navbar-links');
const menuClose =  document.getElementById('close-icon');

// Focus on nav items when user scrolling manually.
window.addEventListener("scroll", function() {
    let scrollPosition = window.scrollY;
    let parentDivs = document.querySelectorAll("body > div");
    let id = '';

    for (let i = 0; i < parentDivs.length; i++) {
        let div = parentDivs[i];
        let offsetTop = div.offsetTop - 350;
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
    }))
);

toggleMobileNavBtn.addEventListener('click', () => {
    toggleMenuButton();
    toggleMenu();
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

function navigate(section, mobile = true) {
    if (mobile) {
        toggleMenuButton();
        toggleMenu();
    }

    document.getElementById(section).scrollIntoView()
}

function toggleMenuButton() {
    menuOpen.classList.toggle('hidden');
    menuClose.classList.toggle('hidden');
}

function toggleMenu() {
    navbarLinks.classList.toggle('hidden');
}
