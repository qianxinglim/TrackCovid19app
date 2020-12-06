<?php

	require_once 'connection.php';
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		//require_once("connection.php");
		
		$sql = "SELECT * FROM user WHERE user_email = '$email'";
		
		$response = mysqli_query($conn, $sql);
		
		$result = array();
		$result['login'] = array();
		
		if(mysqli_num_rows($response)===1){
			
			$row = mysqli_fetch_assoc($response);
			
			if(password_verify($password, $row['user_password'])){
				$index['email']= $row['user_email'];
				$index['name']=$row['user_name'];
				$index['id']=$row['user_id'];
				
				array_push($result['login'], $index);
				
				$result["success"] = "1";
				$result["message"] = "success";
				echo json_encode($result);
				mysqli_close($conn);
			}
			else{
				$result["success"] = "0";
				$result["message"] = "error";
				echo json_encode($result);	
				mysqli_close($conn);
			}
		}
		else{
			$result["success"] = "3";
			$result["message"] = "invalid email";
			echo json_encode($result);	
			mysqli_close($conn);
		}
	}
?>