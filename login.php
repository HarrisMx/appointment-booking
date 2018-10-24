<?php
	session_start();

	include "connect.php";
	
	if(isset($_POST['email']) && isset($_POST['pass'])){
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		echo "<br>".$email." ".$pass ;	
	}

	if($connect){
		echo "<br/>Connection Succesful";
	}else{
		echo "<br/>Connection not Succesful";
	}
	
	$result = $connect->query("SELECT * FROM users");
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			//echo "<br/>Staff Number : " .$row['staff_number']." Password : ".$row['password'];
			if (trim($email) ==  $row['email'] && trim($pass) == $row['password']) {
			 	echo "<br/>Logged In";
			 	$_SESSION['user'] = $row['email'];
			 	header("location:home.php");
			 }else{
			 	echo "<br/>Access Denied";
			 }
		}
	}
	else{
		echo "<br/>Couldn't return anything";
	}
?>