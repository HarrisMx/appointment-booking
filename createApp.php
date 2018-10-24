<?php 
	session_start();
	include "connect.php";
	/*function uploadToDB($table_name , $data){
		$query = "";
		$query .= "INSERT INTO ".$table_name
		$query .= "(".implode(',',array_keys($data)).")  VALUES"
		$query .= "('".implode("','", array_values($data))."')";
	}*/
	if (isset($_POST['pname']) && isset($_POST['pdate']) && isset($_POST['psurname']) && isset($_POST['pdoc'])){
		$name = $_POST['pname'];
		$surname = $_POST['psurname'];
		$doctor = $_POST['pdoc'];
		$date = $_POST['pdate'];
		$query = "INSERT INTO appointment(date, doctor,p_name,p_surname) VALUES('$date','$doctor','$name','$surname')";

		$result = $connect->query($query);
		if($result){
			header("location:appointment.php");
		}else{
			sleep(3);
			echo "Appointment not Created.";
			sleep(3);
			header("location:home.php");
		}
	}

	echo $_SESSION['user'];
 ?>