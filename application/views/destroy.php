<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete a Course</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
</head>
<body>
	<div class="container">
		<h1>Are you sure you want to delete the following course?</h1>
		<div class="row">
			<h4 class="col-md-2">Name: </h4>
			<h4 class="col-md-4"><?php echo $course['name'] ?></h4>
		</div>
		<div class="row">
			<h4 class="col-md-2">Description: </h4>
			<h4 class="col-md-4">
<?php 			if(!empty($course['description'])) {
					echo $course['description'];
				} else {
					echo '(No Description Available)';
				}?>
			</h4>
		</div>
		<form class="col-md-offset-3" action="/courses/delete/<?php echo $course['id'] ?>">
			<input class="btn btn-danger" type="submit" name="no" value="Oops, no I don't">
			<input class="btn btn-success" type="submit" name="yes" value="Delete it!">
		</form>
	</div>
</body>
</html>