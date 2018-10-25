<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="DataTables/dataTables.bootstrap4.min.css"> -->
	<!-- <script src="DataTables/datatables.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script> -->
	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/jquery-3.3.1.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js">
    
    

 	<script >
 		  $(document).ready( function () {
			 $('#mytable').DataTable();
		} );
 	</script>
</head>
<body>
<div class="container-fluid">
<!-- 	<button class="btn btn-success" type="button" data-toggle="modal" data-target="#mymodal">Add Records</button>

	<div class="modal fade" role="modal" id="mymodal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body">
					<button data-dismiss="modal" class="close" type="button">&times</button>
					<?php #include 'participant_forms.php'; ?>
				</div>
			</div>
		</div>
	</div> -->
<br>
<br>
<table id="mytable" class="table table-striped display" style="width:100%">
<thead>
		<tr>
			<th>Full Name</th>
			<th>Module</th>
			<th>Type</th>
			<th>Facility Name</th>
			<th>Venue</th>
			<th>Date Start</th>
			<th>Date End</th>
			<th>Hrs</th>
			<th>Topics</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td>Joshua Taruc</td>
				<td>Module 1</td>
				<td>Excellence</td>
				<td>tph1</td>
				<td>sm</td>
				<td>1/1/1</td>
				<td>1/2/1</td>
				<td>3</td>
				<td>DOH’s Maternal Care Program <br>
					DOH’s Child Care Program <br>
					DOH’s Family Planning Program <br>
					DOH's National Tubercolosis Program <br>
					DOH's Animal Bite Program <br>
					DOH’s Malaria Program <br>
					PhilHealt eClaims Submission
				</td>
				<td><button class="btn btn-info btn-sm">Update</button>
					<button class="btn btn-danger btn-sm">Delete</button></td>

			</tr>

		</tbody>
	</table>
</div>
</body>
</html>