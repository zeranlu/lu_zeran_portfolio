export function iconAnim() {
    gsap.registerPlugin(ScrollTrigger);

    gsap.fromTo(".about-icon-box", {
        scale: 0,
        rotation: -180,
        opacity: 0
    },
    {
        duration: 0.5,
        scale: 1.1,
        rotation: 0,
        opacity: 1,
        stagger: 0.1,
        ease: "back.out",
        scrollTrigger: {
            trigger: "#about",
            start: "10% bottom",
            toggleActions: "play none none reverse",
            markers: false
        }
    }
)
}