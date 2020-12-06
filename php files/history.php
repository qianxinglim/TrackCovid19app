<?php

	include_once("connection.php");
	
	if(isset($_GET['user'])){
		$stmt = $conn->prepare("SELECT shop.shop_name, user.user_name, record.currentDateTime FROM ((record INNER JOIN user ON record.user_id = user.user_id) INNER JOIN shop ON record.shop_id = shop.shop_id) WHERE record.user_id='".$_GET['user']."' ORDER BY record.currentDateTime DESC;");
	}
	
	$stmt->execute();
	
	$stmt->bind_result($shop_name, $user_name, $currentDateTime);
	
	$record = array();
	
	while($stmt->fetch()){
		$temp = array();
		$temp['shop_name'] = $shop_name;
		$temp['user_name'] = $user_name;
		$temp['currentDateTime'] = $currentDateTime;
		
		array_push($record, $temp);
	}
	
	echo json_encode($record);
	
?>