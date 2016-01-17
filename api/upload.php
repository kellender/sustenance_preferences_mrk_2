<?php

$target_dir = "../profile/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
$sizeMax = 1 * 1024 * 1024; // 1 MB
$size = filesize($_FILES["fileToUpload"]["tmp_name"]);
$sizeFlag = $_FILES["fileToUpload"]["size"] < $sizeMax;
  
if ($sizeFlag) {
  $fp = fopen($_FILES["fileToUpload"]["tmp_name"], 'r');
  $content = fread($fp, $size);
  $content = addslashes($content);
  fclose($fp);

  $bid = $_POST["bid"];
  $email = $_POST["total"];

  $stmt = $mysqli->prepare("INSERT INTO `receipt` (`bid`, `data`, `total`, `purchase_time`) VALUES (?, ?, ?, now());");
  $stmt->bind_param("isd", $bid, $content, $total);
  $stmt->execute();
  $stmt->close();
}

?>
