export function contactForm() {

    const form = document.querySelector("#contactForm");
    const feedback = document.querySelector("#feedback-con");

    function regForm() {
        console.log("form has been called");
    }

    form.addEventListener("submit", regForm);

}