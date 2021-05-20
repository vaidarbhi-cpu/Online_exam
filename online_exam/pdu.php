<?php
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	
	$state = $_POST['state'];
	$city = $_POST['city'];
	$email_id = $_POST['email_id'];
	$phone_number = $_POST['phone_number'];
	if ( !empty($first_name) || !empty($last_name) || !empty($state) || !empty($city) || !empty($email_id) || !empty($phone_number)){
		echo "field cannot be empty";
	$conn = new mysqli('localhost','root','','onlineexam');	

	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("UPDATE from personal_details set phone_number= $phone_number where first_name=$first_name");
			
		$stmt->bind_param("sssssi",$first_name,$last_name,$state,$city,$email_id,$phone_number);
		$stmt->execute(); 
		echo"Registration Successful";
		$stmt->close();
		$conn->close();
		header("location:home.html");
	}
	}

?>