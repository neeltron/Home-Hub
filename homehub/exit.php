<?php 
$link = mysqli_connect('localhost', '******', '*****', '********');
$sql = "SELECT * from homehub order by id desc limit 1";
$result_side = mysqli_query($link, $sql);
$resp1 = "";
$resp2 = "";
if (mysqli_num_rows($result_side) > 0) {
while($row = mysqli_fetch_assoc($result_side)) {
	$myObj->air = $row['air'];
	$myObj->temperature = $row['temperature'];
	$myObj->humidity = $row['humidity'];
	if($row['humidity'] > 60) {
    	$resp1 = "Slight showers, might rain in a while!";
    }
	else if($row['humidity'] > 80) {
    	$resp1 = "It's raining outside, take your raincoat!";
    }
	else {
		$resp1 = "Weather looks clear!"; 
    }
	if($row['temperature'] > 30) {
    	$resp1 = $resp1." It's hot out there!";
    }
	else if($row['temperature'] > 20) {
    	$resp1 = $resp1." The temperature is normal!";
    }
	else {
    	$resp1 = $resp1." It's cold out there, grab a jacket!";
    }
	if($row['temperature'] > 50) {
    	$resp2 = "Potential fire alert!";
    }
	else {
    	$resp2 = "Normal";
    }
	$myObj->fire = $resp2;
	$myObj->outdoor = $resp1;
	$myJSON = json_encode($myObj);
	echo $myJSON;
}
}
?>
