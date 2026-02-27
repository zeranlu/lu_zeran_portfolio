import { gallery } from "./modules/gallery.js";
import { hamburgerMenu } from "./modules/hamburgerMenu.js";
import { scrollTo } from "./modules/scrollTo.js";
import { scrollTriggerEffect } from "./modules/scrollTrigger.js";
import { skillSection } from "./modules/skillSection.js";
import { videoPlayer } from "./modules/videoPlayer.js";
import { contactForm } from "./modules/contactForm.js";


hamburgerMenu();


if (document.body.dataset.page === "home") {
    console.log("welcome to the homepage of my portfolio!");

    gallery();
    scrollTo();
    scrollTriggerEffect();
    skillSection();
    videoPlayer();

} else if (document.body.dataset.page === "case-study") {
    console.log("check out some case studies on my projects");

} else if (document.body.dataset.page === "contact") {
    console.log("I look forward to working with yoU!");
    contactForm();
}