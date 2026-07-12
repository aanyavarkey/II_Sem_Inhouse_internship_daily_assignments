<?php

// try to include DB connection; ensure correct path and availability
@include __DIR__ . "/db.php";

// If db.php didn't set $conn, attempt to require it explicitly or abort
if (!isset($conn)) {
	// try requiring once more from current directory
	@require_once __DIR__ . "/db.php";
}

if (!isset($conn)) {
	die('Database connection not available. Please check db.php and the $conn variable.');
}

if(isset($_POST['save']))
{

$name=$_POST['name'];

$email=$_POST['email'];

$course=$_POST['course'];

$phone=$_POST['phone'];

$query="INSERT INTO students(name,email,course,phone)
VALUES('$name','$email','$course','$phone')";

mysqli_query($conn, $query);

header("Location:index.php");

}

?>

<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="form">

<h2>Add Student</h2>

<form method="POST">

<input type="text" name="name" placeholder="Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="text" name="course" placeholder="Course" required>

<input type="text" name="phone" placeholder="Phone" required>

<button name="save">Save</button>

</form>

</div>

</body>

</html>