<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    
    <footer class="fadein">
        <div class="mq">
        <form action="" method="post">
                <h3>JOIN OUR NEWSLETTER TODAY!</h3>
                <?php
                    $userEmail = "";

                    if(isset($_POST['subscribe']))
                    {
                        $userEmail = $_POST['email'];

                        if(filter_var($userEmail, FILTER_VALIDATE_EMAIL))
                        {
                            $subject = "Thanks for Subscribing us - Cover Band";

                            $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";

                            $sender = "From: 101871uk@saeinstitute.edu";

                            if(mail($userEmail, $subject, $message, $sender))
                            {?>
                                <div class="alert success-alert">
                                    <?php echo "Thanks for Subscribing us." ?>
                                </div>
                            <?php
                                $userEmail = "";
                            }
                            else{
                                ?>
                                <div class="alert error-alert">
                                    <?php echo "Failed while sending your mail!" ?>
                                </div>
                                <?php
                            }
                        }
                            else
                            {?>
                                <div class="alert error-alert">
                                    <?php echo "$userEmail is not a valid email address!" ?>
                                </div>
                                <?php
                            }
                            }
                    
                        ?>
                    <div class="email">
                        <label for="email">Email:</label> 
                        <input type="text"  name="email" placeholder="type here" required value="<?php echo $userEmail;?>"/>
                    </div>
                    <div class="newsbutton">
                        <button id="newsletter">Subscribe</button>
                    </div>
                </form>
                


                
                <div class="findus">
                    <h4 id="heading">
                        Where you can find us:
                    </h4>
                    <br>
                    <h4 class="subheading">Adress:</h4>
                    <p>SAE House, 297 Kingsland Rd, London E8 4DD</p>
                    <br>
                    <h4 class="subheading">Phone:</h4>
                    <p>07909663223</p>
                    <br>
                    <h4 class="subheading">Email</h4>
                    <p>101871uk@saeinstitute.edu</p>
                </div>
        </div>
                <div class="links">
                        <a href="https://twitter.com/oliiharris"><img src="images/logos/twitter.png" alt=" cover band twitter logo"/></a>
                        <a href="https://www.instagram.com/oliiharris/"><img src="images/logos/instagram.png" alt="instagram logo"/></a>
                        <a href="https://www.tiktok.com/@oliiharris"><img src="images/logos/tiktok.png" alt="tiktok logo"/></a>
                        <a href="https://www.youtube.com/channel/UCrh62t1jFVEV08TVSzYvJzA"><img src="images/logos/youtube.png" alt="youtube logo"/></a>
                        <a href="https://open.spotify.com/artist/7frkA8nvX651tOPqAvK5ep"><img src="images/logos/spotify.png" alt="spotify logo"/></a>
                </div>
    </footer>

</body>
</html>