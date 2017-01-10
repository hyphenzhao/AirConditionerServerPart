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
  $sql = "SELECT * FROM CommandList where executed=0;";
  $result = $connection->query($sql);
  if($result->num_rows > 0)
  {
    $commands = $result->fetch_assoc();
    $top_command_no = $commands["commandNo"];
    $top_command_id = $commands["commandID"];
    echo $top_command_id;
    $sql = "UPDATE CommandList SET executed=1 WHERE commandNo={$top_command_no};";
    $connection->query($sql);
  }
?>
