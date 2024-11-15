<?php

declare(strict_types=1);

function emptyInputSignUp(string $fullName,string $username,string $email,string $pass)
{
    if( empty($fullName) || empty($username) || empty($email) || empty($pass))
    {
        return true;
    }
    else
        return false;
}

function invalidEmail(string $email)
{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        return true;
    }
    else
        return false;
}

function unExists(object $pdo,string $username)
{
    if(getUsername($pdo,$username))
    {
        return true;
    }
    else
        return false;
}

function emailRegistered(object $pdo,string $email)
{
    if(getEmail($pdo,$email))
    {
        return true;
    }
    else
        return false;
}

function createUser(object $pdo,string $fullName,string $username,string $email,string $pass)
{
    setUser($pdo,$fullName,$username,$email,$pass);
}