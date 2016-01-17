<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

$mysqli = new mysqli("localhost", "root", "2turduckens", "suspref");

if (mysqli_connect_errno()) {
  die('Unable to connect to database [' . mysqli_connect_error() . ']');
}

?>
