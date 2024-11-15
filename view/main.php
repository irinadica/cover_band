<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="cover band, covers, cover songs, rock covers, cover band official website, classic rock,jazz, ballad rock, cover band, covers, cover band concerts">
    <meta name="description" content="'Cover band' is a cover band that plays rock,jazz songs. Check now the latest releases!">
    <title>Cover band | Official website | Home page</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/4fa61b3128.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.4.min.js"></script>


</head>
<body>
    <video id="bgVideo" autoplay loop muted poster="images/mainpics/bgimage.png">
        <source src="trialvideo.mp4" type="video/mp4">
    </video>
    
    
        <?php
            include "header.php";
        ?>

        <main class="latestsongContainer fadein">
            <h2 id="latestsong">LATEST RELEASE</h2>
            <div class="latestSong">
                <div id="lsimage">
                    <img src="images/mainpics/guitarfocus.png" alt=" cover band guitar">
                </div>
                <div id="lsText">
                    <p>Lorem ipsum dolor cover band, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        cover sint occaecat cupidatat non proident, ballad rock cover band in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <?php
                        include "customaudioMain.php";
            ?>
        </main>

       

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
                            include "customaudio2.php";
                        ?>
                </div>
            </div>

            <br>
            <div class="part2">
                <div class="song">
                    <img src="images/mainpics/song3.PNG" alt="song 3 cover photo">
                    <h4>Name of the song</h4>
                        <?php
                            include "customaudio3.php";
                        ?>
                </div>
                <div class="song">
                    <img src="images/mainpics/song4.PNG" alt="song 4 cover photo">
                    <h4>Name of the song</h4>
                        <?php
                            include "customaudio4.php";
                        ?>
                </div>
            </div>
        </main>
        
        <main class="nextgigs fadein">
            <h2>NEXT GIGS</h2>
            <div class="gig">
                <img src="images/mainpics/nextgig.png">
                <div class="nextgigText">
                    <h4>"I’ll Be Homesick For Christmas"</h4><br><br>
                    <h4>DEC 7TH</h4>
                    <br>
                    <h5>FREE ENTRY</h5>
                    <br><br>
                    <p>For the final show this year the cover band and myself will be playing a special one off show <a class="insta" href="https://www.instagram.com/thesixsixbar/">@thesixsixbar</a> alongside some very special guests. 
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
            <script src="js/parallax.js"></script>

</body>
</html>