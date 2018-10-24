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
<link href="css/bootstrap/bootstrap-reboot.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
	<div class="container">
<div class="jumbotron btn-danger">
    <h1 class="danger">Patient Appointment Scheduling System</h1>
</div>
      <div class="row">
                        <div class="col-lg-12">
                            <form action="login.php" method="POST">
                                <div class="form-group">
                                    <label for="name" id="email" >Name</label>
                                    <input type="text" required name="name" autofocus="true" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="sname" id="email" >Surname</label>
                                    <input type="text" required name="sname" autofocus="true" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="email" id="email" >Email</label>
                                    <input type="text" required name="email" autofocus="true" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="pass" id="user">Password</label>
                                    <input type="Password" required name="pass" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="cpass" id="user">Confirm Password</label>
                                    <input type="Password" required name="cpass" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <button id="send" class="btn col-lg-12 btn-large btn-danger" type="submit">Submit Registration</button>
                                </div>
                            </form>
                        </div>
                    </div>
    </div> <!-- /container -->
</body>
</html>