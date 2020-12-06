<?php

	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$ic = $_POST['ic'];
		$state = $_POST['state'];
		$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
		
		require_once("connection.php");
		
		$sql = "SELECT user_email FROM user WHERE user_email=? OR user_ic=?";
		$stmt = mysqli_stmt_init($conn);
		
		if(!mysqli_stmt_prepare($stmt,$sql)){
			$result["success"] = "0";
			$result["message"] = "error";
			
			echo json_encode($result);
			mysqli_close($conn);
		}
		else{
			mysqli_stmt_bind_param($stmt,"ss",$email, $ic);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			
			$resultCheck = mysqli_stmt_num_rows($stmt);
			
			if($resultCheck>0){
				$result["success"] = "2";
				$result["message"] = "errror";
				
				echo json_encode($result);
				mysqli_close($conn);
			}
			else{
				$sql = "INSERT INTO user (user_name, user_email, user_password, user_ic, user_state) VALUES ('$name', '$email', '$hashedpassword', '$ic', '$state')";
				
				if(!mysqli_query($conn, $sql)){
					$result["success"] = "0";
					$result["message"] = "error";
					
					echo json_encode($result);
					mysqli_close($conn);
				}
				else{
					$result["success"] = "1";
					$result["message"] = "success";
					
					echo json_encode($result);
					mysqli_close($conn);
				}
			}
		}
	}
	
?>