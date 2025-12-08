(() => {

// HAMBURGER MENU ------------------------------------

const menu = document.querySelector("#menu");
const hamburger = document.querySelector("#hamburger");
const closeBtn = document.querySelector("#close");
const menuLinks = document.querySelectorAll("#menu nav ul li a");

function toggleMenu() {
    menu.classList.toggle("open");
    console.log("menu class toggled");
};

closeBtn.addEventListener("click", toggleMenu);
hamburger.addEventListener("click", toggleMenu);

menuLinks.forEach((link) => {
    link.addEventListener("click", toggleMenu);
    console.log("menu link clicked");
});



// SKILLS SECTION -----------------------------------------

const row1Logos = [
    {
        logo: "images/software-logo/vscode.svg",
        altText: 'vscode logo'
    },
    {
        logo: "images/software-logo/html-logo.svg",
        altText: 'html logo'
    },
    {
        logo: "images/software-logo/css-logo.svg",
        altText: 'css logo'
    },
    {
        logo: "images/software-logo/js-logo.svg",
        altText: 'javascript logo'
    },
    {
        logo: "images/software-logo/logo-mysql.svg",
        altText: 'mysql logo'
    }
];

const row2Logos = [
    {
        logo: "images/software-logo/new-php-logo.svg",
        altText: 'php logo'
    },
    {
        logo: "images/software-logo/github-mark-white.svg",
        altText: 'github logo'
    },
    {
        logo: "images/software-logo/figma-logo.svg",
        altText: 'figma logo'
    },
    {
        logo: "images/software-logo/Maxon_Cinema_4D_Mark_Primary.svg",
        altText: 'cinema4d logo'
    },
    {
        logo: "images/software-logo/Maxon_Redshift_Mark_Primary.svg",
        altText: 'redshift logo'
    }
];

const row3Logos = [
    {
        logo: "images/software-logo/photoshop-logo.svg",
        altText: 'photoshop logo'
    },
    {
        logo: "images/software-logo/illustrator-logo.svg",
        altText: 'illustrator logo'
    },
    {
        logo: "images/software-logo/aftereffects-logo.svg",
        altText: 'after effects logo'
    }
];

const row1Con = document.querySelector("#icon-row-1");
const row2Con = document.querySelector("#icon-row-2");
const row3Con = document.querySelector("#icon-row-3");

row1Logos.forEach(logoObj => {
    const icon = document.createElement('img');
    icon.src = logoObj.logo;
    icon.alt = logoObj.altText;
    icon.className = 'logo-icon';

    row1Con.appendChild(icon);
});

row2Logos.forEach(logoObj => {
    const icon = document.createElement('img');
    icon.src = logoObj.logo;
    icon.alt = logoObj.altText;
    icon.className = 'logo-icon';

    row2Con.appendChild(icon);
});

row3Logos.forEach(logoObj => {
    const icon = document.createElement('img');
    icon.src = logoObj.logo;
    icon.alt = logoObj.altText;
    icon.className = 'logo-icon';

    row3Con.appendChild(icon);
});


// VIDEO PLAYER -------------------------------------

const playerCon = document.querySelector("#video-player-con");
const player = document.querySelector("video");
const videoControls = document.querySelector(".video-controls");

const toggleButton = document.querySelector("#toggle-button");

const playIcon = document.querySelector("#play");
const pauseIcon = document.querySelector("#pause");

const replayButton = document.querySelector("#replay-button");
const muteButton = document.querySelector("#mute-button");

const yesVolumeIcon = document.querySelector("#yesVol");
const noVolumeIcon = document.querySelector("#noVol");

const volumeSlider = document.querySelector("#change-vol");
const fullScreenButton = document.querySelector("#fullscreen-button");

player.controls = false;
videoControls.classList.remove('hidden');

function togglePlay() {
    console.log("playing video!");
    if (player.paused) {
        player.play();
        playIcon.classList.add('hidden');
        pauseIcon.classList.remove('hidden');
    } else {
        console.log("pausing video!");
        player.pause();
        playIcon.classList.remove('hidden');
        pauseIcon.classList.add('hidden');
    }
}

function replayVideo() {
    console.log("replaying video");
    player.pause();
    player.currentTime = 0;
    player.play();
}

function toggleMute() {
    console.log("muting the video");
    if (player.volume > 0) {
        player.volume = 0;
        yesVolumeIcon.classList.add('hidden');
        noVolumeIcon.classList.remove('hidden');
    } else {
        console.log("un-muting the video");
        player.volume = volumeSlider.value;
        yesVolumeIcon.classList.remove('hidden');
        noVolumeIcon.classList.add('hidden');
    }

}

function changeVolume() {
    console.log("volume is:", volumeSlider.value);
    player.volume = volumeSlider.value;
}

function toggleFullScreen() {
    console.log("exiting fullscreen");
    if (document.fullscreenElement) {
        document.exitFullscreen();
    } else {
        console.log("toggling fullscreen");
        playerCon.requestFullscreen();
    }
}

function hideControls() {
    console.log("hiding controls");
    videoControls.classList.add('hide');
}

function showControls() {
    console.log("showing controls");
    videoControls.classList.remove('hide');
}

toggleButton.addEventListener("click", togglePlay);
replayButton.addEventListener("click", replayVideo);
muteButton.addEventListener("click", toggleMute);
volumeSlider.addEventListener("input", changeVolume);
fullScreenButton.addEventListener("click", toggleFullScreen);
videoControls.addEventListener("mouseenter", showControls);
videoControls.addEventListener("mouseleave", hideControls);

player.addEventListener("mouseenter", showControls);
player.addEventListener("mouseleave", hideControls);


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
})();