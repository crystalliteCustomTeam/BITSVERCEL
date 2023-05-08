<?php

include('database.php');
date_default_timezone_set("US/Eastern");
$today = date('Y-m-d');
$time = date('h:i:s');

$sql = "select * from pageviews where ip = '".$_POST['IP']."' AND  pageurl  = '".$_POST['pageurl']."' ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   echo "IP FOUND NOT ADDED IN HISTORY";
}else{
  $sql = "INSERT INTO pageviews(ip, date, time, pageurl,day,month,year) VALUES ('".$_POST['IP']."','".$today."','".$time."','".$_POST['pageurl']."','".date('D')."','".date('m')."','".date('Y')."')";
  if ($conn->query($sql) === TRUE) {
    echo "Visitor record  successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}



