<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom audio</title>
    <script src="https://kit.fontawesome.com/4fa61b3128.js" crossorigin="anonymous"></script>
    <script src="js/customaudio3.js"></script>
    <link rel="stylesheet" href="css/main.css">

 </head>
 <body>
    <div class="audio">

        <div class="timeslider">
            <div class="buttons" onclick="playpause_track()">
                <i class="fa-regular fa-play" style="color: #7aac2f;"></i>
            </div>
            <div class="currentTime">00:00</div>
                <input type="range" min="1" max="100" value="99" class="seek-slider" onchange="seekto()">
            <div class="totalDuration">00:00</div>
        </div>

        <div class="volumeslider">
            <i class="fa-regular fa-volume-low" style="color: #7aac2f;"></i>
            <input type="range" min="1" max="100" value="99" class="volume-slider" onchange="setVolume()">
            <i class="fa-regular fa-volume-high" style="color: #7aac2f;"></i>
        </div>
    </div>

 </body>
 </html>
 