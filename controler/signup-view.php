<?php

declare(strict_types=1);

function checkSignupErrors()
{
    if(isset($_SESSION["errorsSignup"]))
    {
        $errors=$_SESSION["errorsSignup"];
        echo "<br>";

        foreach($errors as $error)
        {
            echo "<p class='form-errors'".$error."</p>";
        }

        unset($_SESSION["errorsSignup"]);
    }
    else
    if(isset($_GET["signup"]) && $_GET["signup"]=='success')
    {
        echo "<br>";
        echo "<p class='form-success'>Signup Success!</p>";
    }
}

function signupInputs()
{
    echo '<input style="width: 300px;" type="text" name="fn" id="fn"  placeholder="Full Name">';

    if(isset($_SESSION["signupData"]["username"]) && !isset($_SESSION["errorSignup"]["unTaken"]))
    {
        echo '<input style="width: 300px;" type="text" name="un" id="un" placeholder="Username" value="'.$_SESSION["signupData"]["username"].'">';
    }
    else
    {
        echo '<input style="width: 300px;" type="text" name="un" id="un" placeholder="Username">';
    }

    echo '<input style="width: 300px;" type="text" name="pass" id="pass" placeholder="Password">';
    
    if(isset($_SESSION["signupData"]["email"]) && !isset($_SESSION["errorSignup"]["emailRegistered"]) && !isset($_SESSION["errorSignup"]["invalidEmail"]))
    {
        echo '<input type="email" name="email" id="email" placeholder="Email" style="width: 300px;" value="'.$_SESSION["signupData"]["email"].'">';
    }
    else
    {
        echo '<input style="width: 300px;" type="email" name="email" id="email" placeholder="Email">';
    }


}