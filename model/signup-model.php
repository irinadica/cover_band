<?php

declare(strict_types=1);


function getUsername(object $pdo,string $username)
{
    $sql="SELECT username FROM users WHERE username= :username;";
    $stmt= $pdo->prepare($sql);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getEmail(object $pdo,string $email)
{
    $sql="SELECT username FROM users WHERE email= :email;";
    $stmt= $pdo->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function setUser(object $pdo,string $fullName,string $username,string $email,string $pass)
{
    $sql="INSERT INTO user (fullName,username,email,pass) VALUES (:fullName,:username,:email,:pass);";
    $stmt= $pdo->prepare($sql);

    $options=[
        'cost'=12
    ];
    $hashedpass=password_hash($pass, PASSWORD_BCRYPT,$options);

    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":fullName", $fullName);
    $stmt->bindParam(":pass", $hashedpass);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

}