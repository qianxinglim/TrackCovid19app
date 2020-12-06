<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$id = $_POST['id'];
		
		require_once 'connection.php';
		
		$sql = "SELECT * FROM user WHERE user_id='$id'";
		
		$response = mysqli_query($conn, $sql);
		
		$result = array();
		$result['read'] = array();
		
		if(mysqli_num_rows($response)===1){
			
			if($row = mysqli_fetch_assoc($response)){
				$h['name']=$row['user_name'];
				$h['email']=$row['user_email'];
				//$h['password']=$row['user_password'];
				$h['ic']=$row['user_ic'];
				$h['state']=$row['user_state'];
				$h['risk']=$row['user_risk'];
				
				array_push($result["read"], $h);
				
				$result["success"] = "1";
				echo json_encode($result);
				
				mysqli_close($conn);
			}
			
		}
		else{
			$result["success"] = "0";
			$result["message"] = "Error!";
			echo json_encode($result);
			
			mysqli_close($conn);
		}
		
	}



?>