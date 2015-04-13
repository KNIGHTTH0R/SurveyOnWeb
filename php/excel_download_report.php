<?php

	header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");;
    header("Content-Disposition: attachment;filename=list.xls");
    header("Content-Transfer-Encoding: binary ");

$count=0;
$host = "localhost";
$username = "clubt3yy_admin";
$password = "15111993";
$database = "clubt3yy_quiz_portal";

$j;

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

$result = mysqli_query($con, "SELECT * FROM survey");
echo '<table border="2">';
echo '
<tr>
<td>Respondent Name</td>
<td>Respondent Age</td>
<td>Respondent Sex</td>
<td>Respondent Email ID</td>
<td>Respondent Organization</td>
<td>Respondent Designation</td>
<td>Respondent total work experience(in years)</td>
<td>Date</td>';

for ($i=1; $i <= $count; $i++) { 
	echo'<td>Q'.$i.'</td>';
}

echo'
</tr>
';
while ($row = mysqli_fetch_array($result)) {	
	echo "<tr>";
	for($j=0;$j<8;$j++)
	echo '<td>' . $row[$j] . '</td>';
	for($j=($count+7);$j>=8;$j--)
	echo '<td>' . $row[$j] . '</td>';
	echo "</tr>";
}
echo "</table>";

?>