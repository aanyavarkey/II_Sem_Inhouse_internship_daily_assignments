<?php
include "db.php";

// Ensure $conn is available. If db.php didn't set it, create a fallback connection.
if (!isset($conn) || !$conn) {
	$conn = mysqli_connect('localhost', 'root', '', 'test'); // adjust credentials/db as needed
	if (!$conn) {
		die('Database connection failed: ' . mysqli_connect_error());
	}
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Student Management</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1>Student Management System</h1>

<a href="add.php" class="btn">Add Student</a>

<table>

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Course</th>
<th>Phone</th>
<th>Action</th>

</tr>

<?php

$query="SELECT * FROM students";

$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['course']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td>

<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

|

<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>

</html>