export function svgTrace() {
    gsap.registerPlugin(DrawSVGPlugin);

    gsap.fromTo("#hero-svg-con path, #hero-svg-con polygon", {
        drawSVG: "0%",
        opacity: 0
    },
    {
        duration: 2,
        drawSVG: "100%",
        opacity: 1,
        stagger: 0.01,
        ease: "power2.inOut"
    });
}