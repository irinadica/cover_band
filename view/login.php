<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cover Band | Login</title>
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
    <div class="login fadein">
		<form action="../controler/login-inc.php" method="post" >
			<h2>LOGIN</h2>
			<br>
			<div class="data">
				<div class="username">
					<label for="un">Username</label>
					<input type="text" name="un" id="un" placeholder="Please insert your username"><br>
					<span id="un"></span>
				</div>
				
				<div class="pass">
					<label for="pass">Password</label>
					<input type="password" name="pass" id="pass" placeholder="Please insert your password" ><br>
					<span id="un"><span>
				</div>
				
			</div>
           <div class="php">
			<?php
					// if(isset($_GET["error"]))
					// {
					// 	if($_GET["error"]== "emptyinput")
					// 	{
					// 		echo "<p style='font-style: italic; font-size:15px; margin-left:230px;color:red;'>Please fill in all fields!</p><br>";
					// 	}
					// 	else
					// 		if($_GET["error"]== "wronglogin")
					// 		{
					// 			echo "<p style='font-style: italic; font-size:15px; margin-left:230px;color:red;'>Incorrect login! PLease try again.</p><br>";
					// 		}
					// }

				?>
		   </div>
		   
            <input type="submit" name="submit" value="Login" id="logbtn">
            <br>
			<div class="signup">
				<span>You don't have an account yet? Click 
					<a href="signup.php">here</a>
					 to SignUp.
				</span>
			</div>  
		</form>
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