<?php
	header('Content-Type: application/json');
	$conn = mysqli_connect("localhost","root","","farm_db");

	$sql = "SELECT * FROM sensor_value where sensorv_id =".$_GET['sensorv_id'];

	$query = mysqli_query($conn,$sql);
	$resultArray = array();
	while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
		array_push($resultArray,$result);
	}
	mysqli_close($conn);
	echo json_encode($resultArray);
?>