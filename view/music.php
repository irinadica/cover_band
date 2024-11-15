<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="cover band, covers, cover songs, rock covers, cover band official website, classic rock,jazz, ballad rock, cover band, covers, cover band concerts">
    <meta name="description" content="'Cover band' is a cover band that plays rock,jazz songs. Check now the latest releases!">
    <title>Cover band|Official website|Music</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery-3.6.4.min.js"></script>

</head>
<body>
    <video id="bgVideo" autoplay loop muted poster="images/mainpics/bgimage.png">
        <source src="trialvideo.mp4" type="video/mp4">
    </video>
    <?php
        include "header.php";
    ?>

    <main class="musicContainer fadein">
            <h2 id="music">MUSIC</h2>

            <div class="part1">
                <div class="song">
                    <img src="images/mainpics/song1.PNG" alt="song 1 cover photo">
                    <h4>Name of the song</h4>
                        <?php
                            include "customaudio.php";
                        ?>
                </div>
                
                <div class="song">
                    <img src="images/mainpics/song2.PNG" alt="song 2 cover photo">
                    <h4>Name of the song</h4>
                        <?php
                            include "customaudio.php";
                        ?>
                </div>
            </div>
            <hr>
            <br>
            <div class="part2">
                <div class="song">
                    <img src="images/mainpics/song3.PNG" alt="song 3 cover photo">
                    <h4>Name of the song</h4>
                        <?php
                            include "customaudio.php";
                        ?>
                </div>
                <div class="song">
                    <img src="images/mainpics/song4.PNG" alt="song 4 cover photo">
                    <h4>Name of the song</h4>
                        <?php
                            include "customaudio.php";
                        ?>
                </div>
            </div>
        </main>
    <?php
        include "footer.php"
    ?>
            <script src="js/parallax.js"></script>

</body>
</html>