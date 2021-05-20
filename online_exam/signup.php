<?php
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email_id = $_POST['email_id'];
	$password = $_POST['password'];
	
	$conn = new mysqli('localhost','root','','onlineexam');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into student(first_name,last_name,email_id,password)
			values(?,?,?,?)");
		$stmt->bind_param("ssss",$first_name,$last_name,$email_id,$password);
		$stmt->execute();
		echo"Registration Successful";
		$stmt->close();
		$conn->close();
		header("location:personaldetails.html");
	}

?>