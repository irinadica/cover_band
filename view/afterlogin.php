<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="oli harris, oli, oli harris official, oli harris songs, oli harris latest">
    <meta name="description" content="Oli Harris is a rock/jazz artist. Check now the latest album!">
    <title>Oli Harris | Official website</title>
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <video id="bgVideo" autoplay loop muted poster="images/mainpics/bgimage.png">
        <source src="trialvideo.mp4" type="video/mp4">
    </video>
    
        <?php
            include "header.php";
        ?>

        <main class="latestsongContainer">
            <h2 id="latestsong">LATEST RELEASE</h2>
            <div class="latestSong">
                <div id="lsimage">
                    <img src="images/mainpics/guitarfocus.png" alt="guitar image">
                </div>
                <div id="lsText">
                    <p>Latest song description</p>
                    <?php
                        include "customaudio.php";
                    ?>
                </div>
            </div>
        </main>

       

        <main class="musicContainer">
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
        
        <main class="nextgigs">
            <h2>NEXT GIGS</h2>
            <div class="gig">
                <img src="images/mainpics/nextgig.png">
                <div class="nextgigText">
                    <h4>"I’ll Be Homesick For Christmas"</h4><br><br>
                    <h4>DEC 7TH</h4>
                    <br>
                    <h5>FREE ENTRY</h5>
                    <br><br>
                    <p>For the final show this year the band and myself will be playing a special one off show <a class="insta" href="https://www.instagram.com/thesixsixbar/">@thesixsixbar</a> alongside some very special guests. 
                        If you’d like to come and join in this very festive occasion the show will be free entry for everyone.</p>
                    <br>
                    <p>Doors: 7PM</p>
                    <br>
                    <p>In collaboration with <a class="insta" href="https://www.instagram.com/soundoftomorrow24/">@soundoftomorrow24</a> & <a class="insta" href="https://www.instagram.com/angliaruskin/">@angliaruskin</a></p>
                </div>
            </div>
        </main>
        
        <?php
            include "footer.php";
        ?>
    
</body>
</html>