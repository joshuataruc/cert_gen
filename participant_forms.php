<?php 
session_start(); 

$con = new mysqli ('localhost', 'root', '', 'cert_gen');

$opt = "SELECT module_name FROM module";
$opt_query = mysqli_query($con, $opt);

$facility = "SELECT hfhudname FROM lib_facility";
$facility_query = mysqli_query($con, $facility);

$topic1 = "SELECT * FROM topic WHERE mod_id = '1'";
$topic1_query = mysqli_query($con, $topic1);

$topic2 = "SELECT * FROM topic WHERE mod_id = '2'";
$topic2_query = mysqli_query($con, $topic2);




?>
<!DOCTYPE html>
<html>
<head>
	<title>Participants Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
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
	  		<div class="row">
	  			<div class="col-md-6">
	  				<div class="form-group">
			  			<label for="module">Module</label>
			  			<select class="form-control" id="designation" name="module">
			  				<option></option>
							 <?php while ($row = $opt_query->fetch_assoc()):?>
							 	<option value="<?php echo $row['module_name']; ?>"><?php echo $row['module_name']; ?></option>
							 <?php endwhile; ?>
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
  				<select class="form-control" id="fac_id" name="facility_name">
  					<option></option>
							 <?php while ($row = $facility_query->fetch_assoc()):?>
							 	<option value="<?php echo $row['hfhudname']; ?>"><?php echo $row['hfhudname']; ?></option>
							 <?php endwhile; ?>
  				</select>
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
  			<button type="button" name="button" class="btn btn-info" data-toggle="collapse" data-target="#content">Topics</button>
  			<div class="collapse" id="content">

  			<div class="row">
  				<div class="col-md-7">
  					<h6>Module 1</h6>
  					<div class="form-check">
	  					<label class="form-check-label">
	  						<input type="checkbox" name="topic" class="form-check-input" id="checkall1">Check |All
	  					</label>
	  				</div>
  					<?php while ($row = $topic1_query->fetch_assoc()):?>
		  				<div class="form-check">
		  					<label class="form-check-label">
		  						<input type="checkbox" class="form-check-input checkitem1" name="topics[]" id=""><?php echo $row['topic_name']; ?>
		  					</label>
		  				</div>
	  				<?php endwhile; ?>
  				</div>  				
  				
	  			<div class="col-md-5">
	  				<h6>Module 2</h6>
	  				<div class="form-check">
	  					<label class="form-check-label">
	  						<input type="checkbox" name="topic" class="form-check-input" id="checkall2">Check All
	  					</label>
	  				</div>
	  				<?php while ($row = $topic2_query->fetch_assoc()):?>
		  				<div class="form-check">
		  					<label class="form-check-label">
		  						<input type="checkbox" class="form-check-input checkitem2" name="topics[]" id=""><?php echo $row['topic_name']; ?>
		  					</label>
		  				</div>
	  				<?php endwhile; ?>
	  			</div>
  			</div>
  			</div>

  			<br>
  			<br>
  			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
  			<br>
  			<br>
	
  	</form>
</div>

<script>
		//script for check all function
  $("#checkall1").change(function(){
    $(".checkitem1").prop("checked", $(this).prop("checked"))
  })
  $(".checkitem1").change(function(){
    if ($(this).prop("checked")==false) {
      $("#checkall1").prop("checked,false")
    }
    if ($(".checkitem:check").length == $("checkitem1").length) {
      $("#checkall1").prop("checked", true)
    }
  })

  $("#checkall2").change(function(){
    $(".checkitem2").prop("checked", $(this).prop("checked"))
  })
  $(".checkitem2").change(function(){
    if ($(this).prop("checked")==false) {
      $("#checkall2").prop("checked,false")
    }
    if ($(".checkitem:check").length == $("checkitem2").length) {
      $("#checkall2").prop("checked", true)
    }
  })
</script>
</body>
</html>