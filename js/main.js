import { hamburgerMenu } from "./modules/hamburgerMenu.js";
import { scrollTo } from "./modules/scrollTo.js";
import { scrollTriggerEffect } from "./modules/scrollTrigger.js";
import { contactForm } from "./modules/contactForm.js";


hamburgerMenu();
scrollTo();

if (document.body.dataset.page === "home") {
    console.log("welcome to the homepage of my portfolio!");


    // scrollTriggerEffect();

} else if (document.body.dataset.page === "case-study") {
    console.log("check out some case studies on my projects");

} else if (document.body.dataset.page === "contact") {
    console.log("I look forward to working with yoU!");
    contactForm();
}