<?php
  $command = $_GET['commandID'];
  $host = "hyphen.cbmcuorjbbod.ap-southeast-1.rds.amazonaws.com";
  $username = "hyphen";
  $password = "zhaohaifeng123";
  $database = "AirConditioner";
  $connection = new mysqli($host, $username, $password, $database);
  $sql = "SELECT * FROM CommandList WHERE executed=2;";
  $result = $connection->query($sql);
  if($result->num_rows > 0)
  {
    $commands = $result->fetch_assoc();
    $top_command_id = $commands["commandID"];
    echo $top_command_id;
  }
?>
