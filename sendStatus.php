<?php
  $temp = $_GET["temp"];
  $humi = $_GET["humi"];
  $host = "hyphen.cbmcuorjbbod.ap-southeast-1.rds.amazonaws.com";
  $username = "hyphen";
  $password = "zhaohaifeng123";
  $database = "AirConditioner";
  $connection = new mysqli($host, $username, $password, $database);
  $sql = "INSERT INTO Status VALUES(NULL, {$temp}, {$humi}, FALSE);";
  $connection->query($sql);
  echo "Connection Succeed!";
?>
