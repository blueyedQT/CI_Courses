<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add a Course</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
</head>
<body>
	<div class="container">
		<form action="courses/add" method="post">
			<h1>Add a new course</h1>
<?php 	if(!empty($error)) { ?>
			<p class="red"><?php echo $error ?></p>
<?php	} ?>
			<div class="row">
				<div class="col-md-1">Name: </div>
				<div class="col-md-4"><input type="text" name="name" placeholder="Your name here"></div>
			</div>
			<div class="row">
				<div class="col-md-1">Description: </div>
				<div class="col-md-4"><textarea name="description" placeholder="Optional description"></textarea></div>
			</div>
			<div class="row">
				<div class="col-md-offset-2">
					<input class="btn btn-primary" type="submit" name="submit" value="Add">
				</div>
			</div>
		</form>
		<h1>Courses</h1>
		<table class="table table-striped">
			<thead>
				<th>Course Name</th>
				<th>Description</th>
				<th>Date Added</th>
				<th>Actions</th>
			</thead>
			<tbody>
<?php 			foreach ($courses as $course) { ?>
				<tr>
					<td><?php echo $course['name'] ?></td>
					<td><?php echo $course['description'] ?></td>
					<td><?php echo $course['date_created'] ?></td>
					<td><a href="/courses/destroy/<?php echo $course['id'] ?>">Remove</a></td>
				</tr>
<?php 			} ?>
			</tbody>
		</table>
	</div>
</body>
</html>