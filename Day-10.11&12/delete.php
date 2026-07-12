<?php

include "db.php";

// ensure we have a mysqli connection variable named $conn
if (!isset($conn)) {
	// some projects use $con instead of $conn in db.php
	if (isset($con)) {
		$conn = $con;
	} else {
		die('Database connection not found.');
	}
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id <= 0) {
	die('Invalid id.');
}

$stmt = mysqli_prepare($conn, "DELETE FROM students WHERE id = ?");
if ($stmt) {
	mysqli_stmt_bind_param($stmt, 'i', $id);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
}

header("Location:index.php");

?>