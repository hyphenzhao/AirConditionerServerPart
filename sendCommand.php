<?php
  //echo "test";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  $command = $_GET['commandID'];
  $host = "hyphen.cbmcuorjbbod.ap-southeast-1.rds.amazonaws.com";
  $username = "hyphen";
  $password = "zhaohaifeng123";
  $database = "AirConditioner";
  $connection = new mysqli($host, $username, $password, $database);
  $sql = "INSERT INTO CommandList VALUES(null, '{$command}', 0);";
  $connection->query($sql);
  echo "Connection Succeed!";
?>
