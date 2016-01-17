<?php

include "include.php";

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$stmt = $mysqli->prepare("SELECT bid FROM `business` WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($bid);

if (!($stmt->fetch())) {
  $stmt->close();
  $stmt = $mysqli->prepare("INSERT INTO `business` (`name`, `email`, `create_time`, `password`) VALUES (?, ?, now(), ?);"); 

  $cost = 10;
  $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
  $salt = sprintf("$2a$%02d$", $cost) . $salt;
  $hash = crypt($password, $salt);
  $stmt->bind_param("sss", $name, $email, $hash);
  $stmt->execute();
  $stmt->close();

  $stmt = $mysqli->prepare("SELECT bid FROM `business` WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->bind_result($bid);
  $stmt->fetch();

  echo "success";
} else {
  echo "failure";
}

$stmt->close();

?>
