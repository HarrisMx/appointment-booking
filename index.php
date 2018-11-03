<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
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
</head>
<body>
	<div class="container">
<div class="jumbotron bg-danger" style="text-align:center">
    <h1 class="danger" style="color:#ffffff">Log In</h1>
</div>

<div class="container form_container col-lg-12">
<table class="table col-12" align="center">
	<tbody>
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
                                    <Button class="btn btn-danger col-lg-12" name="submit_log">Sign In</Button>
                                </div>
								
                            </form>
                        </div>
                    </div>
			</td>
			<td>
			<h1>Clinic Management System</h1>
			</td>
		</tr>
	</tbody>
	</table>
     </div>
</div>
    </div> <!-- /container -->
</body>
</html>
