<?php
include "include.php";
include "hash_equals.php";

$email = $_POST["email"];

if ($stmt = $mysqli->prepare("SELECT password FROM `business` WHERE email = ?")) {
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->bind_result($password);
  if ($stmt->fetch()) {
    // $password is the stored password, $_POST["password"] is the one entered by the user logging in 
    if ( hash_equals($password, crypt($_POST["password"], $password)) ) {
      echo "success";
    }
    else {
      sleep(1); //pause a bit to help prevent brute force attacks
      echo "fail";
    }
  }
  else {
    echo "fail";
  }  
  $stmt->close();
  $mysqli->close();
} 

?>
