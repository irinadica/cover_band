<?php	
	if($_SERVER["REQUEST_METHOD"]==="POST"){
		$username=$_POST["un"];
		$pass=$_POST["pass"];
		$email=$_POST["email"];
		$fullName=$_POST["fn"];

		try{
			require_once '../model/db_conn.php';
			require_once '../model/signup-model.php';
			require_once 'signup-contr.php';

//ERROR HANDLING

			$errors=[];

			if(emptyInputSignUp($fullName,$username,$email,$pass))
			{
				$errors["emptyInput"]="Fill in all fields!";
			}
			if(invalidEmail($email))
			{
				$errors["invalidEmail"]="Invalid email used!";
			}
			if(unExists($pdo,$username))
			{
				$errors["unTaken"]="Username already taken!";
			}
			if(emailRegistered($pdo,$email))
			{
				$errors["emailRegistered"]="Email already registered!";
			}

			require_once '../model/configSession.php';

			if($errors)
			{
				$_SESSION["errorsSignup"]=$errors;

				$signupData=[
					"fullName"=>$fullName,
					"username"=>$username,
					"password"=>$pass,
					"email"=>$email
				];

				$_SESSION["signupData"]=$signupData;

				header('location: ../view/signup.php');
				die();
			}

			createUser($pdo,$fullName,$username,$email,$pass);
			header('location: ../view/login.php?signup=success');

			$pdo=null;
			$stmt=null;

			die();

		} catch(PDOException $e){
			die("Query failed: " . $e->getMessage());
		}
	}
	else
	{
		header('location: ../view/signup.php');
		die();
	}
?>