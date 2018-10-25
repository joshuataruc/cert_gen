<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
	<form>
		<div class="row">
	  		<div class="col-md-4">
	  			<div class="form-group">
	  			<label for="fname">Full Name</label>
	  			<input type="text" name="fname" id="fname" class="form-control" required>
	  			</div>
	  		</div>
	  		<div class="col-md-4">
	  			<div class="form-group">
	  			<label for="mname">Middle Name</label>
	  			<input type="text" name="mname" id="mname" class="form-control" required>
	  			</div>
	  		</div>
	  		<div class="col-md-4">
	  			<div class="form-group">
	  			<label for="lname">Last Name</label>
	  			<input type="text" name="lname" id="lname" class="form-control" required>
	  			</div>
	  		</div>
	  	</div><!-- end row tab -->
		<div class="form-group">
			<label for="user">Username</label>
			<input type="text" name="username" id="user" class="form-control" required="">
		</div>
		<div class="form-group">
			<label for="pass">Password</label>
			<input type="password" name="pass" class="form-control" required="">
		</div>
		<div class="form-group">
			<label for="con_pass">Confirm Password</label>
			<input type="password" name="con_pass" id="con_pass" class="form-control" required="">
		</div>
		<div class="custom-control custom-radio custom-control-inline">
			<input type="radio" name="status" class="custom-control-input" id="admin">
			<label for="admin" class="custom-control-label">Admin</label>
			
		</div>
		<div class="custom-control custom-radio custom-control-inline">
			<input type="radio" name="status" class="custom-control-input" id="active">
			<label for="active" class="custom-control-label">Active</label>
			
		</div>
		<br><br>
		<input type="submit" name="add_user" class="btn btn-info" value="Add User">
		<br><br>
	</form>
	
</div>
</body>
</html>