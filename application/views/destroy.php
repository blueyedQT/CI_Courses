<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete a Course</title>
</head>
<body>
	<h1>Are you sure you want to delete the following course?</h1>
	<h4>Name: <?php echo $course['name'] ?></h4>
	<h4>Description: <?php echo $course['description'] ?></h4>
	<form action="/courses/index">
		<input type="submit" name="no" value="Oops, no I don't">
	</form>
	<form action="/courses/delete/<?php echo $course['id'] ?>">
	<input type="submit" name="yes" value="Delete it!">
</form>

</body>
</html>