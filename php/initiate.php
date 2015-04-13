<?php
$host = "localhost";
$username = "clubt3yy_admin";
$password = "15111993";
$database = "clubt3yy_quiz_portal";

echo '<html><head><META http-equiv="refresh" content="5;URL=add_question.php"></head>';

//Making connection
$con = mysqli_connect($host, $username, $password);

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create database
$con = mysqli_connect($host, $username, $password, $database);

//Check connection
if (mysqli_connect_errno()) {
	$sql = "CREATE DATABASE quiz_db";
	if (mysqli_query($con, $sql)) {
		echo "Database my_db created successfully";
	} else {
		echo "Error creating database: " . mysqli_error($con);
	}
}

//Making new database specific connection
$con = mysqli_connect($host, $username, $password, $database);

//Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create table quiz
$sql = "SELECT 1 FROM quiz LIMIT 1;";
if (mysqli_query($con, $sql)) {
	//echo "Table exists";
} else {
	$sql = "CREATE TABLE quiz(qno INT NOT NULL AUTO_INCREMENT PRIMARY KEY,qtype TEXT NOT NULL, question TEXT NOT NULL, op1 TEXT DEFAULT NULL, op2 TEXT DEFAULT NULL, op3 TEXT DEFAULT NULL,op4 TEXT DEFAULT NULL, op5 TEXT DEFAULT NULL, op6 TEXT DEFAULT NULL, op7 TEXT DEFAULT NULL, op8 TEXT DEFAULT NULL, op9 TEXT DEFAULT NULL, op10 TEXT DEFAULT NULL )";
	// Execute query
	if (mysqli_query($con, $sql)) {
		echo "Table quiz created successfully";
	} else {
		echo "Error creating table: " . mysqli_error($con);
	}
}

?>
