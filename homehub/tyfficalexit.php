<?php 
$link = mysqli_connect('localhost', 'u630298647_bruh', 'Stonks@404', 'u630298647_tangled');
$sql = "SELECT * from homehub";
$result_side = mysqli_query($link, $sql);
$resp1 = "";
$resp2 = "";
$myObj->air = array(0);
$myObj->temperature = array(0);
$myObj->humidity = array(0);
$myObj->timestamp = array(0);
if (mysqli_num_rows($result_side) > 0) {
while($row = mysqli_fetch_assoc($result_side)) {
    array_push($myObj->air, intval($row['air']));
    array_push($myObj->temperature, intval($row['temperature']));
    array_push($myObj->humidity, intval($row['humidity']));
    array_push($myObj->timestamp, $row['timestamp']);
    $myJSON = json_encode($myObj);
}
}
echo $myJSON;
?>
