export function scrollTo() {
// SCROLL TO
gsap.registerPlugin(ScrollToPlugin);

const navLinks = document.querySelectorAll("#menu nav ul li a");
    
navLinks.forEach((navLink) => {
    navLink.addEventListener("click", scrollLink);
    })

function scrollLink(event) {
    const href = event.currentTarget.getAttribute('href');

    if (href && href.startsWith("#")) {
        event.preventDefault();
        gsap.to(window, {
            duration: 1,
            scrollTo: {
                y: href,
                offsetY: 150,
                ease: "power2.out"
            }
        });
    }
}
}