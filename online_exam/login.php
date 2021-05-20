<?php
	$email_id = $_POST['email_id'];
	$password = $_POST['password'];
	
	
	$conn = new mysqli('localhost','root','','onlineexam');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}
		else{
	
		($stmt = $conn->prepare("SELECT * from student where login.email_id = student.email_id"))
		header("location:home.html");
	}
	else{
	header("location:login.html");
	echo "not registered user";
}
?>
