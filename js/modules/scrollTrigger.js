export function scrollTriggerEffect() {
// SCROLL TRIGGER -----------------------------------------------------

gsap.registerPlugin(ScrollTrigger);

gsap.from(".logo-icon", {
    scale: 0.5,
    duration: 0.5,
    stagger: 0.5,
    ease: "back.out(1.7)",
    scrollTrigger: {
        trigger: "#skills",
        start: "top 80%", 
        toggleActions: "play none none reverse",
        markers: false
    }
});
}