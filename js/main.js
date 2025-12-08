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
})();