<?php
  $command = $_GET['commandID'];
  $host = "hyphen.cbmcuorjbbod.ap-southeast-1.rds.amazonaws.com";
  $username = "hyphen";
  $password = "zhaohaifeng123";
  $database = "AirConditioner";
  $connection = new mysqli($host, $username, $password, $database);
  $sql = "UPDATE CommandList SET executed=1 WHERE executed=2;";
  $connection->query($sql);
  $sql = "INSERT INTO CommandList VALUES(null, '{$command}', 2);";
  $connection->query($sql);
  echo "Connection Succeed!";
?>
