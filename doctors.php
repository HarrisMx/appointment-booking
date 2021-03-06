<?php 
	session_start();
	include "connect.php"; 
  $Doc_name = "";
  $date = "";

  if (isset($_POST['delete'])) {
      $sql = "DELETE FROM appointment WHERE id = ".$_GET['id'];
      $result = $connect->query($sql);     
      header("location : appointment.php");
  }

  if (isset($_POST['update'])) {
      $Doc_name = $_POST['newDoc'];
      $date = $_POST['date'];

      $sql = "UPDATE appointment SET date = '".$date."', doctor = '".$Doc_name."' WHERE id = ".$_GET['id'];
      $result = $connect->query($sql);     
      #header("location : appointment.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctors</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/bootstrap/bootstrap-grid.css" rel="stylesheet" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="css/index.css" media="screen">
<link href="css/bootstrap/bootstrap-reboot.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript">
	function clearForm(){
		document.getElementById('pdate').innerHTML = " ";
		document.getElementById('pname').innerHTML = " ";
		document.getElementById('psurname').innerHTML = " ";
		document.getElementById('pdoc').innerHTML = " ";
	}
</script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-danger">
			<p style="margin-top: 7px, margin-top7px;" class="text-right"><?php 
 ?></p>
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php">Create Appointment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="appointment.php">View Appointments</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="doctors.php">View Doctors</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="adoctor.php">Add Doctors</a>
      </li>
      <li class="nav-item">
        <form nethod="post" action="logout.php">
        	<button class="btn btn-dark" type="submit">Logout</button>
        </form>
      </li>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>

 <div class="panel">

 			<?php
 		 ?>
 	<div class="panel-heading btn-danger">
 		<h1 id="header-text">Appointment Schedules</h1>
 	</div>
 	<div class="panel-body">
 		<table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Specialization</th>
      </tr>
    </thead>

    <tbody>
    <?php 
    	 $sql = "SELECT * FROM doctor";

    	  $result = $connect->query($sql);
    	 	
    	 if (! $result){
   				throw new My_Db_Exception('Database error: ' . mysql_error());
		}else{
	    	 while ($row = $result->fetch_assoc()) {
	    	 		?>
						<tr>
	        				<td><?php  echo $row["doc_name"]?></td>
	        				<td><?php  echo $row["doc_surname"]?></td>
	        				<td><?php  echo $row["specialty"]?></td>
	      		</tr>
	    	 		<?php
	    	 }
    	 }
     ?>
    </tbody>
  </table>
 	</div>
 </div>
</div>
</body>
</html>