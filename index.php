<!DOCTYPE html>
<html>
<head>
	<title>Clinic Management System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/bootstrap/bootstrap-grid.css" rel="stylesheet" type="text/css" media="screen">
	<link href="css/index.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/bootstrap/bootstrap-reboot.css" rel="stylesheet" type="text/css" media="screen">
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.map.js" type="text/javascript"></script>
</head>
<body>` 
	<div class="container">
<div class="jumbotron bg-danger" style="text-align:center">
    <h1 class="danger" style="color:#ffffff">Log In</h1>
</div>
<div class="container form_container col-lg-12">
<table class="table col-12 login-screen" align="center">
	<tbody>
        <tr>
            <td style="padding-top:20px;height:70px" class="title">Clinic Management System</td>
        </tr>
		<tr>
			<td>
			<div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="php/includes/users.php">
                                <div class="form-group">
                                    <label for="id">ID Number</label>
                                    <input type="text" id="id" required name="id" autofocus="true" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="pword" id="password" >Password</label>
                                    <input type="password" id="pword" required name="password" autofocus="true" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <Button class="btn btn-danger col-lg-12" name="submit_log" type="submit">Sign In</Button>
                                </div>
								<div class="form-group">
                                    <Button class="btn btn-primary col-lg-12 signup" onclick="navigate()" name="signup">Sign Up</Button>
                                </div>
                            </form>
                        </div>
                    </div>
			</td>
		</tr>
	</tbody>
	</table>
     </div>
</div>
    </div> <!-- /container -->


  <!-- Modal -->
  <div class="modal fade" id="errorModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="php/includes/users.php">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
