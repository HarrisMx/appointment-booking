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
<script>
    $(document).ready(function(){ 
       // $('#myModal').modal('show');
    });
</script>
</head>
<body>
	<div class="container">
<div class="jumbotron bg-danger" style="text-align:center;color:#ffffff">
    <h1 class="danger">Clinic Management System</h1>
</div>
      <div class="row">
                        <div class="col-lg-12">
                            <form action="login.php" method="POST">
                                <div class="form-group">
                                    <label for="name" id="email" >Name</label>
                                    <input type="text" required name="name" id="name" autofocus="true" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="sname" id="email" >Surname</label>
                                    <input type="text" required name="sname" autofocus="true" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="id" id="email" >ID Number</label>
                                    <input type="text" required name="id" id="id" autofocus="true" class="form-control id"/>
                                </div>
                                <div class="form-group">
                                    <label for="email" id="email" >Email</label>
                                    <input type="text" required name="email" id="email" autofocus="true" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="pass" id="user">Password</label>
                                    <input type="Password" required name="pass" id="pass" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="cpass" id="user">Confirm Password</label>
                                    <input type="Password" required name="cpass" id="cpass" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <button id="send" class="btn col-lg-12 btn-large btn-danger" type="submit">Submit Registration</button>
                                </div>
                                <div class="form-group">
                                    <button id="send" class="btn col-lg-12 btn-large btn-primary" type="submit">Clear Form</button>
                                </div>
                            </form>
                        </div>
                    </div>
    </div> <!-- /container -->

<!-- Modal -->
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>