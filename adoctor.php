<?php 
  session_start();
  include('php/includes/connect.db.php');

  $conn = new Database_Connection();
  $connection_link = $conn->connect();

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.js.map" type="text/javascript"></script>
<link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/bootstrap/bootstrap-grid.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/bootstrap/bootstrap-reboot.css" rel="stylesheet" type="text/css" media="screen">
<script src="js/functions.js" type="text/javascript"></script>
<?php 
    if(isset($_GET['user_exists'])) {
        if($_GET['user_exists'] == 'true') {  ?>
        <script>
             $(document).ready(function(){ 
                $('#user_exist').modal('show');
            });
        </script>;
<?php } 
}?>
</head>
<body>
	<div class="container">
<div class="jumbotron bg-danger" style="text-align:center;color:#ffffff">
    <h1 class="danger">Add New Doctor</h1>
</div>
      <div class="row">
                        <div class="col-lg-12">
                            <form action="php/functions.php" method="POST">
                                <div class="form-group">
                                    <label for="name" id="email" >Name</label>
                                    <input type="text" required name="name" id="name" autofocus="true" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="sname" id="email" >Surname</label>
                                    <input type="text" required name="sname" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="add" id="add" >Specialization</label>
                                    <input type="text" required name="add" id="add" class="form-control id"/>
                                </div>
                                
                                <div class="form-group">
                                    <button id="send" class="btn col-lg-12 btn-large btn-danger" name="add_doc" type="submit">Add Doctor</button>
                                </div>
                            </form>
                        </div>
                    </div>
    </div> <!-- /container -->

<!-- ID Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Information extracted from ID</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table">
    <thead>
      <tr>
        <th>DOB</th>
        <th>Gender</th>
        <th>Age</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td class="dob"></td>
        <td class="gender"></td>
        <td class="age"></td>
      </tr>
    </tbody>
  </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary clear-form">Discard</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Confirm</button>
      </div>
    </div>
  </div>
</div>

<!--User Error Modal -->
<div class="modal fade" id="user_exist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration Error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="text-align:center">
            ID Number already registered
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="clear()">OK</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>