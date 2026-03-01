export function specialText() {
    
    gsap.registerPlugin(SplitText);
    gsap.registerPlugin(ScrollToPlugin);

    const textElements = document.querySelectorAll('.special-text');

    const textTL = gsap.timeline();

    textElements.forEach((element, index) => {
        
        const animText = new SplitText(element, { type: 'chars' });
        
        textTL.fromTo(animText.chars, 
            {
                opacity: 0,
                y: 20,
                rotationX: -90
            },
            {
                duration: 0.5,
                opacity: 1,
                y: 0,
                rotationX: 0,
                stagger: 0.05,
                ease: 'back.inOut'
            });
    });
};