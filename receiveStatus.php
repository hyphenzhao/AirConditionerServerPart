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
  $sql = "SELECT * FROM Status where executed=0;";
  $result = $connection->query($sql);
  if($result->num_rows > 0)
  {
    $status = $result->fetch_assoc();
    $top_status_id = $status["statusID"];
    $top_status_temp = $status["temperature"];
    $top_status_humi = $status["humidity"];
    echo $top_status_temp . "-" . $top_status_humi;
    $sql = "UPDATE Status SET executed=1 WHERE statusID={$top_status_id};";
    $connection->query($sql);
  }
  //echo "Connection Succeed!";
?>
