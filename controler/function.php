<?php
// empty($phone) ||
// function emptyInputSignUp($fn,$ln,$email,$un,$pass,$repass)
// {
//     $result;
//     if(empty($fn) || empty($ln) || empty($email) ||  empty($un) || empty($pass) || empty($repass))
//     {
//         $result= true;
//     }
//     else
//         $result= false;
//     return $result;
// }

// function invalidUn($un)
// {
//     $result;
//     if(!preg_match("/^[a-zA-Z0-9]*$/", $un))
//     {
//         $result= true;
//     }
//     else
//         $result= false;
//     return $result;
// }
// function invalidEmail($email)
// {
//     $result;
//     if(filter_var($email, FILTER_VALIDATE_EMAIL))
//     {
//         $result= true;
//     }
//     else
//         $result= false;
//     return $result;
// }
// function passMatch($pass,$repass)
// {
//     $result;
//     if($pass !== $repass)
//     {
//         $result= true;
//     }
//     else
//         $result= false;
//     return $result;
// }

// // function unExists($conn,$un)
// // {
// //     $result;
// //    $sql="SELECT * FROM users WHERE username=?";
// //    $stmt= mysqli_stmt_init($conn);
// //    if(!mysqli_stmt_prepare($stmt,$sql))
// //    {
// //     header('Location: ../view/signup.php?error=stmtfailedunExists');
// //     exit();
// //    }
// //    mysqli_stmt_bind_param($stmt,"s",$un);
// //    mysqli_stmt_execute($stmt);

// //    $resultData=mysqli_stmt_get_result($stmt);
// //    echo var_dump($resultData);

// //    if($row=mysqli_fetch_assoc($resultData))
// //    {
// //         $result=true;
// //         return $result;

// //    }
// //    else
// //    {
// //         $result= false;
// //         return $result;
// //    }
// //    mysqli_stmt_close($stmt);
// // }
// // function invalidPhone($phone){
// //     $result;
// //     if(preg_match('/^[0-9]{11}+$/', $phone)) {
// //         $result=true;
// //     } 
// //     else {
// //         $return=false;
// //     }
// //     return $result;
// // }
// // function createUser($conn,$fn,$ln,$email,$un,$pass)
// // {
// //    $sql="INSERT INTO users (firstName,lastName,email,username,password) VALUES (?,?,?,?,?);";
// //    $stmt= mysqli_stmt_init($conn);
// //    if(!mysqli_stmt_prepare($stmt,$sql))
// //    {
// //     header('Location: ../view/signup.php?error=stmtfailedcreateUser');
// //     exit();
// //    }

// //    $hashPass=password_hash($pass, PASSWORD_DEFAULT);

// //    mysqli_stmt_bind_param($stmt,"sssss",$fn,$ln,$email,$un,$hashPass);
// //    mysqli_stmt_execute($stmt);
// //    mysqli_stmt_close($stmt);
// //    header('Location: ../view/signup.php?error=none');
// //    exit();
// // }


// // function createUser($conn, $fn, $ln, $email, $un, $pass)
// // {
// //     try {
// //         $sql = "INSERT INTO users (firstName, lastName, email, username, password) VALUES (?,?,?,?,?);";
// //         $stmt = mysqli_stmt_init($conn);

// //         if (!mysqli_stmt_prepare($stmt, $sql)) {
// //             throw new Exception("Statement preparation failed: " . mysqli_error($conn));
// //         }

// //         $hashPass = password_hash($pass, PASSWORD_DEFAULT);

// //         mysqli_stmt_bind_param($stmt, "sssss", $fn, $ln, $email, $un, $hashPass);
// //         mysqli_stmt_execute($stmt);
// //         mysqli_stmt_close($stmt);

// //         header('Location: ../view/signup.php?error=none');
// //         exit();
// //     } catch (Exception $e) {
// //         header('Location: ../view/signup.php?error=stmtfailedcreateUser&message=' . urlencode($e->getMessage()));
// //         exit();
// //     }
// // }


// function emptyInputLogin($un,$pass)
// {
//     $result;
//     if(empty($un) || empty($pass))
//     {
//         $result= true;
//     }
//     else
//         $result= false;
//     return $result;
// }
   
// function loginUser($conn,$un,$pass)
// {
//     $unExists=unExists($conn,$un,$pass);

//     if($unExists== false)
//     {
//         header('Location: ../view/login.php?error=wronglogin');
//         exit();
//     }

//     $passHash=$unExists["password"];
//     $checkpass=password_verify($pass,$passHash);

//     if($checkpass=== false)
//     {
//         header('Location: ../view/login.php?error=wronglogin');
//         exit();
//     }
//     else
//         if($checkpass=== true)
//         {
//             session_start();
//             $_SESSION["id"]=$unExists["id"];
//             $_SESSION["username"]=$unExists["username"];
//             header("Location: ../view/main.php");
//             exit();
//         }
    
//}