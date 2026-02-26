export function gallery() {
// IMAGE GALLERY --------------------------------------------


const images = [
    {
        small:"images/gallery-images/s-gallery-image-353X271-1.png",
        large:"images/gallery-images/l-gallery-image-690X530-1.png"
    },
    
    {
        small:"images/gallery-images/s-gallery-image-353X271-2.png",
        large:"images/gallery-images/l-gallery-image-690X530-2.png"
    },

    {
        small:"images/gallery-images/s-gallery-image-353X271-3.png",
        large:"images/gallery-images/l-gallery-image-690X530-3.png"
    },

    {
        small:"images/gallery-images/s-gallery-image-353X271-4.png",
        large:"images/gallery-images/l-gallery-image-690X530-4.png"
    },

    {
        small:"images/gallery-images/s-gallery-image-353X271-5.png",
        large:"images/gallery-images/l-gallery-image-690X530-5.png"
    }
];

let imageIndex = 0;
const galleryImage = document.querySelector(".gallery-image");
const prevButton = document.querySelector("#previous-button");
const nextButton = document.querySelector("#next-button");

function getImagePath(imageSelection) {
    if (window.innerWidth <= 768) {
        return imageSelection.small;
    } else {
        return imageSelection.large;
    }
}

galleryImage.src = getImagePath(images[imageIndex]);

function animateSlide(newIndex, direction) {
    const offset = direction * 100;

    gsap.to(galleryImage, {
        xPercent: -offset,
        opacity: 0,
        duration: 0.5,
        onComplete: () => {
            imageIndex = newIndex;
            galleryImage.src = getImagePath(images[imageIndex]);
            galleryImage.style.transform = `translateX(${offset}%)`;

            gsap.to(galleryImage, {
                xPercent: 0,
                opacity: 1,
                duration: 0.5
            });
        }
    });
};

window.addEventListener("resize", () => {
    galleryImage.src = getImagePath(images[imageIndex]);
});

nextButton.addEventListener("click", () => {
    let newIndex = imageIndex + 1;
    if (newIndex >= images.length) {
        newIndex = 0;
    } animateSlide(newIndex, 1);
    console.log("previous image");
});

prevButton.addEventListener("click", () => {
    let newIndex = imageIndex - 1;
    if (newIndex < 0) {
        newIndex = images.length - 1;
    } animateSlide(newIndex, -1);
    console.log("next image");
})
}