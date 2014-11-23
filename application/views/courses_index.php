<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add a Course</title>
</head>
<body>
	<form action="courses/add" method="post">
		<h1>Add a new course</h1>
		<p>Name: <input type="text" name="name" placeholder="Your name here"></p>
		<p>Description: <textarea name="description"></textarea></p>
		<input type="submit" name="submit" value="Add">
	</form>
	<h1>Courses</h1>
	<table>
		<thead>
			<th>Course Name</th>
			<th>Description</th>
			<th>Date Added</th>
			<th>Actions</th>
		</thead>
		<tbody>
			<tr>
				<td>How to be a ninja</td>
				<td>Ninja Schoo</td>
				<td>Dec 1st 2014 5:34PM</td>
				<td><a href="remove.php?={value_here}">Remove</a></td>
			</tr>
		</tbody>
	</table>
</body>
</html>