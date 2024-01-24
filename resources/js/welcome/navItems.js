const className = 'nav-item-focused';

window.addEventListener("scroll", function() {
    let scrollPosition = window.scrollY;
    let parentDivs = document.querySelectorAll("body > div");

    for (let i = 0; i < parentDivs.length; i++) {
        let div = parentDivs[i];
        let offsetTop = div.offsetTop;
        let offsetBottom = offsetTop + div.offsetHeight;
        let id = '';

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

            focused(document.getElementById(id));
        }
    }
});

function focused(element)
{
    if (element.classList.contains(className)) {
        return;
    }

    let links = element.parentElement.children;

    for (let i = 0; i < links.length; i++) {
        let link = links[i];

        if (link.classList.contains(className)) {
            link.classList.remove(className);
        }
    }

    element.classList.add(className);
}
