<?php

include "db.php";

// Ensure $conn is defined
if (!isset($conn) || !$conn) {
	die('Database connection not established.');
}

$id=$_GET['id'];

$data=mysqli_query($conn,"SELECT * FROM students WHERE id=$id");

$row=mysqli_fetch_assoc($data);

if(isset($_POST['update']))
{

$name=$_POST['name'];

$email=$_POST['email'];

$course=$_POST['course'];

$phone=$_POST['phone'];

mysqli_query($conn,"UPDATE students SET
name='$name',
email='$email',
course='$course',
phone='$phone'
WHERE id=$id");

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

<h2>Edit Student</h2>

<form method="POST">

<input type="text" name="name" value="<?php echo $row['name'];?>">

<input type="email" name="email" value="<?php echo $row['email'];?>">

<input type="text" name="course" value="<?php echo $row['course'];?>">

<input type="text" name="phone" value="<?php echo $row['phone'];?>">

<button name="update">Update</button>

</form>

</div>

</body>

</html>