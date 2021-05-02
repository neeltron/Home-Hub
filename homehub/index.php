<?php
$air = $_GET['air'];
$temp = $_GET['temperature'];
$hum = $_GET['humidity'];
$link = mysqli_connect('localhost', '******', '*****', '******');
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO homehub (air, humidity, temperature) VALUES ($air, $hum, $temp)";
if (mysqli_query($link, $sql)) {
  echo "New record created successfully";
}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>