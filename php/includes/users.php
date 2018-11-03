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
				
				if($username == $row['email'] && $password == $row['password']){
					#cann assign your session variables here
					$_SESSION['email'] = $row['email'];
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
			//$statement = $this->connection_link->prepare($sql_command);
			/*if ($result->rowCount()) {
				$statement->bind_param("ssssssss", implode(',', array_values($data)));	
				$statement->execute();
			}
			else{
				echo "The Query was not correctly prepared";
			}*/

			return 1;
		}
	}

	$user = new ManageUsers();
	

	if(isset($_POST['submit_log'])){
		
		$username = trim($_POST['id']);
		$password = trim($_POST['password']);
		
		$table = 'users';

		if($user->Login_user($table , $username, $password)){
			
			$sql = "SELECT id FROM ".$table." WHERE email='".$username."' AND password = '".$password."'";
			
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
		$password = trim($_POST['pass']);	
		$address = trim($_POST['address']); 
		$nkName = trim($_POST['nkName']);
		$nkSname = trim($_POST['nkSname']);
		$nkContact = trim($_POST['nkContact']);
		$Contact = trim($_POST['contact']);
		$table = 'users';

		$data = array(
			'name' => $name,
			'surname' => $surname,
			'contact' => $Contact,
			'image' => $image,
			'username' => $username,
			'address' => $address,
			'password' => $password,
			'nkName' => $nkName,
			'nkSname' => $nkSname,
			'nkContact' => $nkContact
		);

		if($user->Execute_registration($data,$table) > 0){
			header("Location: ../../index.php?msg=1");
		}
		else{
			header("Location: ../../register.html?msg=1");
		}
	}
 ?>