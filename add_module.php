<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	  <style>
	  	.background{
	  		background-color: #e9ecef;
	  		padding: 25px;
      		border-radius: 5px
	  	}
	  </style>
</head>
<body>
	<div class="container-fluid">
		<form action="POST" method="">
			<div class="background-color">
				<div class="form-group">
					<label for="mod_name">Module Name</label>
					<input type="text" name="module_name" id="mod_name" class="form-control">
				</div>
			</div>
			<br>
			<div class="background-color">
				<h5 class="text-muted">Add Topics</h5>
				<div class="form-group">
					<label for="top1">Topic 1</label>
					<input type="text" name="topic1" class="form-control" id="top1">
				</div>
				<div class="form-group">
					<label for="top2">Topic 2</label>
					<input type="text" name="topic2" class="form-control" id="top2">
				</div>
				<div class="form-group">
					<label for="top3">Topic 3</label>
					<input type="text" name="topic3" class="form-control" id="top3">
				</div>
				<div class="form-group">
					<label for="top4">Topic 4</label>
					<input type="text" name="topic4" class="form-control" id="top4">
				</div>
				<div class="form-group">
					<label for="top5">Topic 5</label>
					<input type="text" name="topic5" class="form-control" id="top5">
				</div>
				<input type="submit" name="add_module_and_topics" value="Add" class="btn btn-info">
			</div>
		</form>
	</div>

</body>
</html>