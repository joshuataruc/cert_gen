
<?php 
$con = new mysqli ('localhost', 'root', '', 'cert_gen');

$opt = "SELECT Region FROM reg";
$opt_query = mysqli_query($con, $opt);



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Facility Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
	<form method="POST" action="" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="facil_id">Facility ID</label>
					<input type="text" name="facility_id" id="facil_id" class="form-control" required>
				</div>
			</div>
			<div class="col-md-9">
				<div class="form-group">
					<label for="facil_name">Facility Name</label>
					<input type="text" name="facility_name" id="facil_name" class="form-control" required>
				</div>
			</div>
		</div><!-- end row -->
		
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="region">Region</label>
					<select name="region" id="region" class="form-control">
							<option></option>
							 <?php while ($row = $opt_query->fetch_assoc()):?>
							 	<option value="<?php echo $row['Region']; ?>"><?php echo $row['Region']; ?></option>
							 <?php endwhile; ?>
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="prov">Province</label>
					<input type="text" name="province" id="prov" class="form-control" required>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="mun">Municipality</label>
					<input type="text" name="municipality" id="mun" class="form-control" required>
				</div>
			</div>
		</div><!-- end row -->
		<div class="form-group">
			<label class="mayor">Mayor</label>
			<input type="text" name="mayor" id="mayor" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="logo">Logo</label>
			<input type="file" name="logo" id="logo" class="btn btn-link">
		</div>

		<input type="submit" name="add_facility" value="Add Facility" class="btn btn-info">

		<br>
		<br>


	</form>
	
</div><!-- end main cont -->
</body>
</html>