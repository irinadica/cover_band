<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_name = 'music_colab';
  $table='subsribers';
 
  // $conn=mysqli_connect($db_host,$db_user,$db_password,$db_db);
  // if(!$conn)
  // {
  //   die('connection failed'.mysqli_connect_error());
  // }
  // // else
  // //   echo 'success';

  //   $conn->close();

  try{
    $pdo=new PDO('mysql:host'.$db_host.';dbname='.$db_name.';charset=utf8', $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
  } catch (PDOException $e){
    die("Connection failed:".$e->getMessage());
  }

  
?>
