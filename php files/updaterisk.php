<?php
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$id = $_POST['id'];
		$risk = $_POST['risk'];
		
		require_once("connection.php");
			
		//$row = mysqli_fetch_assoc($response);
		
		$sql = "UPDATE user SET user_risk='$risk' WHERE user_id='$id'";
		
		if(mysqli_query($conn, $sql)){
			$result["success"] = "1";
			$result["message"] = "success";
			
			echo json_encode($result);
			mysqli_close($conn);
		}
		else{
			$result["success"] = "0";
			$result["message"] = "SOS";
			echo json_encode($result);	
			mysqli_close($conn);
		}
	}
?>