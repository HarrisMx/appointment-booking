<?php 
	session_start();
	include_once('connect.db.php');
	
	$p_name = "";
	$p_surname = "";

	$username = "";
	$password = "";


	class ManageUsers
	{
		public $connection_link;
		function __construct(){
			$conn = new Database_Connection();
			$this->connection_link = $conn->connect();
		}

		function addVal($length , $character){
			$va = $character;
			
			for ($c=0; $c < sizeof($length) - 1; $c++) { 
				$va .= ','.$character;
			}	
			return $va;
		}

		function Register_user($table_name , $data){
			$sql = "";
			$sql = "INSERT INTO ".$table_name;
			$sql .= "(".implode(',', array_keys($data)).") VALUES ";
			$sql .= "('".implode("','", array_values($data))."')";
			return $sql;
		}

		function Login_user($table_name , $username , $password){
			$user_varified = false;
			$sql = "SELECT * FROM ".$table_name;
			
			$result = $this->connection_link->query($sql);

			while($row = mysqli_fetch_assoc($result)){
				
				if($username == $row['id_number'] && $password == $row['password']){
					#cann assign your session variables here
					$_SESSION['id_number'] = $row['id_number'];
					$_SESSION['logged_in'] = "yes";
					$user_varified = true;
					break;
				}
			}
			return $user_varified;
		}

		function Execute_registration($data,$table){
			$sql_command = $this->Register_user($table , $data);
			echo $sql_command;
			$result = $this->connection_link->query($sql_command);
			return 1;
		}

		function checkIdentity($id , $table_name){
			$user_varified = false;
			$sql = "SELECT * FROM ".$table_name;

			$result = $this->connection_link->query($sql);

			while($row = mysqli_fetch_assoc($result)){
				
				if($id == $row['id_number']){
					$user_varified = true;
					break;
				}
			}

			return $user_varified;
		}
	}

	$user = new ManageUsers();
	
	if(isset($_POST['signup'])){
		header("Location: ../../register.php");
	}

	if(isset($_POST['submit_log'])){
		
		$username = trim($_POST['id']);
		$password = trim($_POST['password']);
		
		$table = 'users';

		if($user->Login_user($table , $username, $password)){
			
			$sql = "SELECT id FROM ".$table." WHERE id_number='".$username."' AND password = '".$password."'";
			
			$result = $user->connection_link->query($sql);

			while($row = mysqli_fetch_assoc($result)){
				$idnt = $row['id'];
			}
			$_SESSION['loged'] = $idnt;
			echo("Logged in");
			header("Location: ../../home.php?loged=".$idnt);
		}else{
			echo("Could not Login User");
			header("Location: ../../index.php?loged=false");
		}
	}

	if(isset($_POST['submit_reg'])){

		$name = trim($_POST['name']);
		$surname = trim($_POST['sname']);
		$username = trim($_POST['uname']);	
		$image = trim($_FILES['image']['name']);

		if(empty($image)){
			$image = "user.png";
		}
		//Folder to Save the pictures
		$target = "images/".basename($_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'] , $target);
		
		#Get user date from form
		$id = trim($_POST['id']); 
		$name = trim($_POST['name']);
		$surname = trim($_POST['sname']);
		$email = trim($_POST['email']);
		$pass = trim($_POST['pass']);
		$cpass = trim($_POST['cpass']);	
		
		#specify table name on the database
		$table = 'users';

		#Prepare all values to be passed as an array
		$data = array(
			'id_number' => $id,
			'password' => $pass,
			'name' => $name,
			'surname' => $surname,
			'email' => $email,
		);

		if ($user->checkIdentity($data['id_number'] ,  $table)){
			header("Location: ../../register.php?user_exists=true");
		}else{
			if($user->Execute_registration($data,$table) > 0){
				header("Location: ../../home.php");
			}
			else{
				header("Location: ../../register.php");
			}
		}
		
	}
 ?>