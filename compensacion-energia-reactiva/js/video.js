const playButton = document.getElementById("play-button");
const video = document.getElementById("video");
const playContainer = document.querySelector('.play-container');

playButton.addEventListener("click", () => {
    video.play();
    playContainer.style.display = "none";
    playButton.removeEventListener('click', playVideo);
});

function playVideo() {
    video.play();
    playContainer.style.display = "none";
    playButton.removeEventListener('click', playVideo);
}

video.addEventListener('ended', () => {
    playContainer.style.display = "block";
    playButton.addEventListener('click', playVideo);
});