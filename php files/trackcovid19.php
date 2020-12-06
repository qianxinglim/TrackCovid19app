<?php

	include_once("connection.php");

	if(isset($_GET['shop']) && isset($_GET['user']) && isset($_GET['currentDateTime'])){
		$sql="INSERT INTO `record` (`shop_id`, `user_id`, `currentDateTime`) VALUES ('".$_GET['shop']."', '".$_GET['user']."', '".$_GET['currentDateTime']."')";
	}

	if (mysqli_query($conn, $sql)) {
		$result["success"] = "1";
		$result["message"] = "record created successfully";
		
		echo json_encode($result);
		mysqli_close($conn);
	  //echo "New record created successfully";
	} else {
		$result["success"] = "0";
		$result["message"] = "error";
		
		echo json_encode($result);
		mysqli_close($conn);
	  //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	//$conn->close();
	
?>