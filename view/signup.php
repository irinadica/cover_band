<?php
		require_once "../model/configSession.php";	
		require_once "../controler/signup-view.php";	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cover Band | Sign Up</title>
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
	
		<div class="register fadein">
			<form action="../controler/signup-inc.php" method="POST" id="register">
				<h2>SIGN UP</h2>
				<div class="data">
					<?php
						signupInputs();
					?>
					<!-- <div class="fn">
						<label for="fn">Full Name</label>
						<input type="text" name="fn" id="fn"  placeholder="Please insert your full name">
						
					</div>
					<div class="email">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" placeholder="Please insert your email"> 
						
					</div> 
					<div class="username">
						<label for="un">Username</label>
						 
						
					</div>
					<div class="pass">
						<label for="pass">Password</label>
						<input type="password" name="pass" id="pass" placeholder="Please insert your password">
						
					</div>
					<div class="repass">
						<label for="repass">Repeat Password</label>
						<input type="password" name="repass" id="repass" placeholder="Please confirm your password"> 
						
					</div>-->
				</div> 
				
				<button type="submit" name="submit" id="signbtn">Sign Up</button>
				<br>
				<div class="loginText">
					<span>Already have an account? Click <a href="login.php">here</a>
						to sign in.
					</span>
				</div>
			</form>
			<?php
				checkSignupErrors();
			?>
			<div class="vr"></div>
			<div>
				<img id="mainImage" src="images/mainpics/signImage.jpg" alt="music quote">
			</div>
		</div>

	<?php 
		include "footer.php";
	?>	
			<script src="js/parallax.js"></script>

</body>
</html>