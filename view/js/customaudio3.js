
let isPlaying = false;
let audio = new Audio("song5.mp3");

function playpause_track() {
    if (isPlaying) {
        audio.pause();
    } else {
        audio.play();
    }
    isPlaying = !isPlaying;
}

function seekto() {
    let seekValue = document.querySelector(".seek-slider").value;
    let seekPosition = (seekValue / 100) * audio.duration;
    audio.currentTime = seekPosition;
}

function setVolume() {
    let volumeValue = document.querySelector(".volume-slider").value;
    audio.volume = volumeValue / 100;
}

audio.addEventListener("timeupdate", function () {
    let currentMinutes = Math.floor(audio.currentTime / 60);
    let currentSeconds = Math.floor(audio.currentTime - currentMinutes * 60);

    let durationMinutes = Math.floor(audio.duration / 60);
    let durationSeconds = Math.floor(audio.duration - durationMinutes * 60);

    if (currentSeconds < 10) {
        currentSeconds = "0" + currentSeconds;
    }

    if (durationSeconds < 10) {
        durationSeconds = "0" + durationSeconds;
    }

    document.querySelector(".currentTime").textContent = currentMinutes + ":" + currentSeconds;
    document.querySelector(".totalDuration").textContent = durationMinutes + ":" + durationSeconds;

    let seekPosition = (audio.currentTime / audio.duration) * 100;
    document.querySelector(".seek-slider").value = seekPosition;
});

audio.addEventListener("ended", function () {
    isPlaying = false;
    document.querySelector(".fa-play").style.display = "block";
    document.querySelector(".fa-pause").style.display = "none";
});