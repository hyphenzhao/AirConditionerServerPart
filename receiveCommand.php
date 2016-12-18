<?php
  //echo "test";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  // $command = $_GET['commandID'];
  $host = "hyphen.cbmcuorjbbod.ap-southeast-1.rds.amazonaws.com";
  $username = "hyphen";
  $password = "zhaohaifeng123";
  $database = "AirConditioner";
  $connection = new mysqli($host, $username, $password, $database);
  $sql = "SELECT * FROM CommandList where executed=0;";
  $result = $connection->query($sql);
  if($result->num_rows > 0)
  {
    $commands = $result->fetch_assoc();
    $top_command_no = $commands["commandNo"];
    $top_command_id = $commands["commandID"];
    echo "{".$top_command_id."}";
    $sql = "UPDATE CommandList SET executed=1 WHERE commandNo={$top_command_no};";
    $connection->query($sql);
  }
  //echo "Connection Succeed!";
?>