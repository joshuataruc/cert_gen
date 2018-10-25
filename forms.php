<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
<div class="container">
<ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-user-tab" data-toggle="pill" href="#pills-user" role="tab" aria-controls="pills-user" aria-selected="true">Participants</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-entry-tab" data-toggle="pill" href="#pills-entry" role="tab" aria-controls="pills-entry" aria-selected="false">Entry</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-facility-tab" data-toggle="pill" href="#pills-facility" role="tab" aria-controls="pills-facility" aria-selected="false">Facility</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">
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
	  		<div class="row">
	  			<div class="col-md-6">
	  				<div class="form-group">
			  			<label for="module">Module</label>
			  			<select class="form-control" id="designation" name="module">
			  				<option></option>
			  				<option value="Module 1">Module 1</option>
			  				<option value="Module 2">Module 2</option>
			  			</select>
	  				</div>
	  			</div>
	  			<div class="col-md-6">
	  				<div class="form-group">
			  			<label for="designation">Designation</label>
			  			<select class="form-control" id="designation" name="designation">
			  				<option></option>
			  				<option value="Excellence">Excellence</option>
			  				<option value="Completion">Completion</option>
			  				<option value="Participation">Participation</option>
			  			</select>
	  				</div>
	  			</div>
	  		</div>
	  		
  			<div class="form-group">
  				<label for="fac_id">Facility Name</label>
  				<input type="text" name="fac_id" id="fac_id" class="form-control" required>
  			</div>
  			<div class="form-group">
  				<label for="venue">Venue</label>
  				<input type="text" name="venue" id="venue" class="form-control" required>
  			</div>
  			<div class="row">
  				<div class="col-md-4">
  					<div class="form-group">
  						<label for="date_start">Date Start</label>
  						<input type="date" name="date_start" id="date_start" class="form-control">
  					</div>
  				</div>
  				<div class="col-md-4">
  					<div class="form-group">
  						<label for="date_end">Date End</label>
  						<input type="date" name="date_end" id="date_end" class="form-control">
  					</div>
  				</div>
  				<div class="col-md-4">
  					<label for="hrs">Hours</label>
  					<input type="number" name="hrs" id="hrs" class="form-control">
  				</div>
  			</div><!-- end row -->

  			<input type="submit" name="submit" value="Submit" class="btn btn-info">
	
  	</form>

	</div>
  </div><!-- end user tab -->
  
</div><!-- end entry tab -->
  <div class="tab-pane fade" id="pills-facility" role="tabpanel" aria-labelledby="pills-facility-tab">facility</div><!-- end facilty tab -->
</div>
<div class="tab-pane fade" id="pills-entry" role="tabpanel" aria-labelledby="pills-entry-tab">...</div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>