<?php

include "include.php";

$name = $_POST["name"];
$email = $_POST["email"];
$owner_name = $_POST["owner_name"];
$password = $_POST["password"];

$stmt = $mysqli->prepare("INSERT INTO `business` (`name`, `email`, `owner_name`, `create_time`, `password`) VALUES (?, ?, ?, now(), ?);")); 

$cost = 10;
$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
$salt = sprintf("$2a$%02d$", $cost) . $salt;
$hash = crypt($password, $salt);
$stmt->bind_param("sss", $name, $email, $owner_name, $password);
$stmt->execute();
$stmt->close();

?>
