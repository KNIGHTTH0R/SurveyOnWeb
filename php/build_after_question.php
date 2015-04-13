<?php

$count=0;
$host = "localhost";
$username = "clubt3yy_admin";
$password = "15111993";
$database = "clubt3yy_quiz_portal";

echo '<html><head><META http-equiv="refresh" content="10;URL=index.php"></head>';

//Making new database specific connection
$con = mysqli_connect($host, $username, $password, $database);
    
//Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Count total questions
$sql = "SELECT COUNT(qno) FROM quiz;";

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$count=$row[0];
echo $count." questions found... <br>";

// Create table survey
$sql = "SELECT 1 FROM survey LIMIT 1;";
if (mysqli_query($con, $sql)) {
	//echo "Table exists";
} else {
	$sql = "CREATE TABLE survey( res_name text NOT NULL, res_age text NOT NULL, res_sex text NOT NULL, res_email varchar(200), PRIMARY KEY(res_email), res_organization text, res_designation text, res_workex text, date text)";
	// Execute query
	if (mysqli_query($con, $sql)) {
		echo "Table survey created successfully<br>";
	} else {
		echo "Error creating table: " . mysqli_error($con);
	}
}

for ($i=$count; $i >0 ; $i--) { 
	// Alter table survey
$sql = "ALTER TABLE survey ADD response".$i."  varchar(5) NOT NULL DEFAULT 'op1'";
	// Execute query
	if (mysqli_query($con, $sql)) {
		echo "Table survey altered successfully, field ".$i." added...<br>";
	} else {
		echo "Error altering table: " . mysqli_error($con);
	}
}
?>