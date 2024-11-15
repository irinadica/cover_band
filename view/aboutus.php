<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="cover band, covers, cover songs, rock covers, cover band official website, classic rock,jazz, ballad rock, cover band, covers, cover band concerts">
    <meta name="description" content="'Cover band' is a cover band that plays rock,jazz songs. Check now the latest releases!">
    <title>Cover band | Official website | About Us</title>
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
    <main class="about fadein">
            <h2>ABOUT US</h2>
            <div class="part1">
                <div class="aboutContent">
                    <div class="crewContainer">
                        <img src="images/mainpics/guitar1.png" alt="crew 1">
                    </div>
                    <div>
                        <p class="aboutDescription">Lorem ipsum band sit amet consectetur rock covers elit. Repellendus, molestias cover band enim debitis ab ad? Quia excepturi voluptatibus laudantium adipisci?</p>
                        <p class="aboutName">Name</p>
                    </div>
                </div>

                <div class="aboutContent">
                    <div class="crewContainer">
                        <img src="images/mainpics/guitar2.png" alt="crew 2">
                    </div>
                    <div>
                        <p class="aboutDescription">Lorem ipsum dolor sit amet cover band official website adipisicing elit. Officia, earum?</p>
                        <p class="aboutName">Name</p>
                    </div>
                </div>
            </div>
            
            <div class="part2">
                <div class="aboutContent">
                    <div class="crewContainer">
                        <img src="images/mainpics/guitar3.png" alt="crew 3">
                    </div>
                    <div>
                        <p class="aboutDescription">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, possimus!</p>
                        <p class="aboutName">Name</p>
                    </div>
                </div>

                <div class="aboutContent">
                    <div class="crewContainer">
                        <img src="images/mainpics/micrecording.png" alt="crew 4">
                    </div>
                    <div>
                        <p class="aboutDescription">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, velit.</p>
                        <p class="aboutName">Name</p>
                    </div>
                </div>
            </div>
    </main>

    <?php
        include "footer.php"
    ?>
        <script src="js/parallax.js"></script>

</body>
</html>