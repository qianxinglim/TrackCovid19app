<?php
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$id = $_POST['id'];
		$oldPassword = $_POST['oldPassword'];
		$newPassword = $_POST['newPassword'];
		$hashedpassword = password_hash($newPassword, PASSWORD_DEFAULT);
		
		require_once("connection.php");
		
		$sql = "SELECT * FROM user WHERE user_id='$id'";
		
		$response = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($response)===1){
			
			$row = mysqli_fetch_assoc($response);
			
			if(password_verify($oldPassword, $row['user_password'])){
				$sql2 = "UPDATE user SET user_password='$hashedpassword' WHERE user_id='$id'";
				
				if(mysqli_query($conn, $sql2)){
					$result["success"] = "1";
					$result["message"] = "success";
					
					echo json_encode($result);
					mysqli_close($conn);
				}
			}
			else{
				$result["success"] = "0";
				$result["message"] = "Incorrect Old Password";
				echo json_encode($result);	
				mysqli_close($conn);
			}
		}
	}
?>