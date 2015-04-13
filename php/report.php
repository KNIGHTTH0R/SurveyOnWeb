<?php

$i=0;
//Connection parameters
	$host = "localhost";
	$username = "clubt3yy_admin";
	$password = "15111993";
	$database = "clubt3yy_quiz_portal";

$con = mysqli_connect($host,$username, $password, $database);
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

echo '
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div align="left" style="opacity:1; font-size:18px; color:#585858; position:absolute; top:0px; left:0px; right:0px; width:100%; margin-top:0px; margin-left:0px; margin-right:0px; height:25px; background-color: #33CCFF; border-bottom-width:1px; border-bottom-style:inset; border-color:#3399FF;">
<table broder="0" width="100%">
<tr>
<td width="85%"><b>Psychological Empowerment Survey</b></td>
<td width="5%"><b><a href="index_admin.php" align="right"><div width="20px" height="20px"><img width="20px" height="20px" src="../img/home.png"></div></a></b></td>
<td width="5%"><b><a href="add_question.php" align="right"><div width="20px" height="20px"><img width="20px" height="20px" src="../img/add.png"></div></a></b></td>
<td width="5%"><b><a href="excel_download_report.php" align="right"><div width="20px" height="20px"><img width="20px" height="20px" src="../img/report.png"><img width="20px" height="20px" src="../img/download.png"></div></a></b></td>
</table>
</div>

<table class="TFtable">
	<tr><td align="center" colspan="3"><b>ORGANISATION CULTURE </b></td></tr>
	<tr><td align="center" colspan="3">For each of the statements described below, please indicate the extent to which your organization focuses upon each practice.</td></tr>
';
$result = mysqli_query($con, "SELECT * FROM quiz WHERE qtype='organisation_culture'");
while ($row = mysqli_fetch_array($result)) {
	$i++;	
	echo "<tr>";
	echo "<td>".$i."</td><td>" . $row['question'] . "</td>";
	echo '<td>  <table>';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<tr><td>' . $row["op1"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='1';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		{echo '<tr><td>' . $row["op2"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='2';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		{echo '<tr><td>' . $row["op3"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='3';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		{echo '<tr><td>' . $row["op4"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='4';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		{echo '<tr><td>' . $row["op5"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='5';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		{echo '<tr><td>' . $row["op6"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='6';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		{echo '<tr><td>' . $row["op7"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='7';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		{echo '<tr><td>' . $row["op8"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='8';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		{echo '<tr><td>' . $row["op9"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='9';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
	    {echo '<tr><td>' . $row["op10"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='10';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	echo '</table>  </td>';
	echo "</tr>";
}

echo '
</table>
<br>
<table class="TFtable">
	<tr><td align="center" colspan="3"><b>HR PRACTICES </b></td></tr>
	<tr><td align="center" colspan="3">For each of the management practices described below, please indicate the extent to which your organization focuses upon each HR/management practices.</td></tr>
';
$result = mysqli_query($con, "SELECT * FROM quiz WHERE qtype='hr_practices'");

while ($row = mysqli_fetch_array($result)) {
	$i++;	
	echo "<tr>";
	echo "<td>".$i."</td><td>" . $row['question'] . "</td>";
	echo '<td>  <table>';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<tr><td>' . $row["op1"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='1';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		{echo '<tr><td>' . $row["op2"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='2';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		{echo '<tr><td>' . $row["op3"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='3';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		{echo '<tr><td>' . $row["op4"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='4';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		{echo '<tr><td>' . $row["op5"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='5';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		{echo '<tr><td>' . $row["op6"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='6';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		{echo '<tr><td>' . $row["op7"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='7';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		{echo '<tr><td>' . $row["op8"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='8';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		{echo '<tr><td>' . $row["op9"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='9';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
	    {echo '<tr><td>' . $row["op10"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='10';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	echo '</table>  </td>';
	echo "</tr>";
}

echo '
</table>
<br>
<table class="TFtable">
	<tr><td align="center" colspan="3"><b>ORGANISATION STRUCTURE </b></td></tr>
	<tr><td align="center" colspan="3"><b>Participation in Decision Making </b></td></tr>
	<tr><td align="center" colspan="3">Each statement describes how much participation in decision making you feel at your work. Please indicate the extent of your participation.</td></tr>
';
$result = mysqli_query($con, "SELECT * FROM quiz WHERE qtype='organisation_structure'");

while ($row = mysqli_fetch_array($result)) {
	$i++;	
	echo "<tr>";
	echo "<td>".$i."</td><td>" . $row['question'] . "</td>";
	echo '<td>  <table>';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<tr><td>' . $row["op1"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='1';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		{echo '<tr><td>' . $row["op2"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='2';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		{echo '<tr><td>' . $row["op3"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='3';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		{echo '<tr><td>' . $row["op4"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='4';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		{echo '<tr><td>' . $row["op5"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='5';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		{echo '<tr><td>' . $row["op6"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='6';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		{echo '<tr><td>' . $row["op7"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='7';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		{echo '<tr><td>' . $row["op8"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='8';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		{echo '<tr><td>' . $row["op9"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='9';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
	    {echo '<tr><td>' . $row["op10"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='10';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	echo '</table>  </td>';
	echo "</tr>";
}

echo '
</table>
<br>
<table class="TFtable">
	<tr><td align="center" colspan="3"><b>Hierarchy of authority </b></td></tr>
	<tr><td align="center" colspan="3">Each statement describes the kind of hierarchy of authority you experience at work. Please indicate your experience on this scale.</td></tr>
';
$result = mysqli_query($con, "SELECT * FROM quiz WHERE qtype='hierarchy_of_authority'");

while ($row = mysqli_fetch_array($result)) {
	$i++;	
	echo "<tr>";
	echo "<td>".$i."</td><td>" . $row['question'] . "</td>";
	echo '<td>  <table>';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<tr><td>' . $row["op1"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='1';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		{echo '<tr><td>' . $row["op2"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='2';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		{echo '<tr><td>' . $row["op3"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='3';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		{echo '<tr><td>' . $row["op4"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='4';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		{echo '<tr><td>' . $row["op5"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='5';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		{echo '<tr><td>' . $row["op6"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='6';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		{echo '<tr><td>' . $row["op7"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='7';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		{echo '<tr><td>' . $row["op8"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='8';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		{echo '<tr><td>' . $row["op9"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='9';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
	    {echo '<tr><td>' . $row["op10"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='10';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	echo '</table>  </td>';
	echo "</tr>";
}

echo '
</table>
<br>
<table class="TFtable">
	<tr><td align="center" colspan="3"><b>Formalization </b></td></tr>
	<tr><td align="center" colspan="3">Each statement describes how formalized structure your organization has. Please indicate your views on this scale.</td></tr>
';
$result = mysqli_query($con, "SELECT * FROM quiz WHERE qtype='formalization'");

while ($row = mysqli_fetch_array($result)) {
	$i++;	
	echo "<tr>";
	echo "<td>".$i."</td><td>" . $row['question'] . "</td>";
	echo '<td>  <table>';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<tr><td>' . $row["op1"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='1';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		{echo '<tr><td>' . $row["op2"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='2';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		{echo '<tr><td>' . $row["op3"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='3';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		{echo '<tr><td>' . $row["op4"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='4';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		{echo '<tr><td>' . $row["op5"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='5';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		{echo '<tr><td>' . $row["op6"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='6';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		{echo '<tr><td>' . $row["op7"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='7';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		{echo '<tr><td>' . $row["op8"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='8';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		{echo '<tr><td>' . $row["op9"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='9';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
	    {echo '<tr><td>' . $row["op10"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='10';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	echo '</table>  </td>';
	echo "</tr>";
}

echo '	
</table>
<br>
<table class="TFtable">
	<tr><td align="center" colspan="3"><b>PSYCHOLOGICAL EMPOWERMENT </b></td></tr>
	<tr><td align="center" colspan="3">The statements below list out a number of self-orientations that you may have with regard to your work role. Using the following scale, please indicate the extent to which you agree or disagree that each one describes your self-orientation.</td></tr>
';
$result = mysqli_query($con, "SELECT * FROM quiz WHERE qtype='psycological_empowerment'");

while ($row = mysqli_fetch_array($result)) {
	$i++;	
	echo "<tr>";
	echo "<td>".$i."</td><td>" . $row['question'] . "</td>";
	echo '<td>  <table>';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<tr><td>' . $row["op1"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='1';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		{echo '<tr><td>' . $row["op2"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='2';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		{echo '<tr><td>' . $row["op3"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='3';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		{echo '<tr><td>' . $row["op4"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='4';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		{echo '<tr><td>' . $row["op5"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='5';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		{echo '<tr><td>' . $row["op6"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='6';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		{echo '<tr><td>' . $row["op7"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='7';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		{echo '<tr><td>' . $row["op8"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='8';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		{echo '<tr><td>' . $row["op9"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='9';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
	    {echo '<tr><td>' . $row["op10"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='10';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	echo '</table>  </td>';
	echo "</tr>";
}

echo '
</table>
<br>
<table class="TFtable">
	<tr><td align="center" colspan="3"><b>JOB SATISFACTION </b></td></tr>
	<tr><td align="center" colspan="3">The statements below describe how satisfied you feel at your work. Please indicate the extent of your satisfaction.</td></tr>
';
$result = mysqli_query($con, "SELECT * FROM quiz WHERE qtype='job_satisfaction'");

while ($row = mysqli_fetch_array($result)) {
	$i++;	
	echo "<tr>";
	echo "<td>".$i."</td><td>" . $row['question'] . "</td>";
	echo '<td>  <table>';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<tr><td>' . $row["op1"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='1';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		{echo '<tr><td>' . $row["op2"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='2';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		{echo '<tr><td>' . $row["op3"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='3';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		{echo '<tr><td>' . $row["op4"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='4';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		{echo '<tr><td>' . $row["op5"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='5';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		{echo '<tr><td>' . $row["op6"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='6';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		{echo '<tr><td>' . $row["op7"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='7';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		{echo '<tr><td>' . $row["op8"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='8';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		{echo '<tr><td>' . $row["op9"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='9';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
	    {echo '<tr><td>' . $row["op10"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='10';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	echo '</table>  </td>';
	echo "</tr>";
}

echo '
</table>
<br>
<table class="TFtable">
	<tr><td align="center" colspan="3"><b>TURNOVER INTENTION </b></td></tr>
	<tr><td align="center" colspan="3">The statements below describe how inclined you feel to continue at your place of work. Please indicate your turnover intensions on the scale below.</td></tr>
';
$result = mysqli_query($con, "SELECT * FROM quiz WHERE qtype='turnover_intention'");

while ($row = mysqli_fetch_array($result)) {
	$i++;	
	echo "<tr>";
	echo "<td>".$i."</td><td>" . $row['question'] . "</td>";
	echo '<td>  <table>';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<tr><td>' . $row["op1"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='1';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		{echo '<tr><td>' . $row["op2"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='2';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		{echo '<tr><td>' . $row["op3"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='3';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		{echo '<tr><td>' . $row["op4"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='4';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		{echo '<tr><td>' . $row["op5"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='5';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		{echo '<tr><td>' . $row["op6"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='6';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		{echo '<tr><td>' . $row["op7"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='7';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		{echo '<tr><td>' . $row["op8"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='8';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		{echo '<tr><td>' . $row["op9"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='9';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
	    {echo '<tr><td>' . $row["op10"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='10';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	echo '</table>  </td>';
	echo "</tr>";
}

echo '
</table>
<br>
<table class="TFtable">
	<tr><td align="center" colspan="3"><b>ORGANISATIONAL COMMITMENT </b></td></tr>
	<tr><td align="center" colspan="3">The statements below describe how committed you feel at your work. Please indicate your commitment level on the scale below.</td></tr>
';
$result = mysqli_query($con, "SELECT * FROM quiz WHERE qtype='organizational_commitment'");

while ($row = mysqli_fetch_array($result)) {
	$i++;	
	echo "<tr>";
	echo "<td>".$i."</td><td>" . $row['question'] . "</td>";
	echo '<td>  <table>';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<tr><td>' . $row["op1"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='1';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		{echo '<tr><td>' . $row["op2"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='2';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		{echo '<tr><td>' . $row["op3"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='3';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		{echo '<tr><td>' . $row["op4"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='4';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		{echo '<tr><td>' . $row["op5"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='5';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		{echo '<tr><td>' . $row["op6"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='6';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		{echo '<tr><td>' . $row["op7"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='7';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		{echo '<tr><td>' . $row["op8"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='8';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		{echo '<tr><td>' . $row["op9"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='9';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
	    {echo '<tr><td>' . $row["op10"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='10';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	echo '</table>  </td>';
	echo "</tr>";
}

echo '
</table><br>
<table class="TFtable">
	<tr><td align="center" colspan="3"><b>INNOVATIVE BEHAVIOUR </b></td></tr>
	<tr><td align="center" colspan="3">The statements below describe how innovative you feel at work. Please indicate your level of innovation on the scale below:</td></tr>
';
$result = mysqli_query($con, "SELECT * FROM quiz WHERE qtype='innovative_behaviour'");

while ($row = mysqli_fetch_array($result)) {
	$i++;	
	echo "<tr>";
	echo "<td>".$i."</td><td>" . $row['question'] . "</td>";
	echo '<td>  <table>';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<tr><td>' . $row["op1"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='1';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		{echo '<tr><td>' . $row["op2"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='2';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		{echo '<tr><td>' . $row["op3"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='3';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		{echo '<tr><td>' . $row["op4"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='4';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		{echo '<tr><td>' . $row["op5"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='5';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		{echo '<tr><td>' . $row["op6"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='6';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		{echo '<tr><td>' . $row["op7"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='7';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		{echo '<tr><td>' . $row["op8"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='8';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		{echo '<tr><td>' . $row["op9"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='9';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
	    {echo '<tr><td>' . $row["op10"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='10';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	echo '</table>  </td>';
	echo "</tr>";
}

echo '
</table><br>
<table class="TFtable">
	<tr><td align="center" colspan="3"><b>ENGAGEMENT </b></td></tr>
	<tr><td align="center" colspan="3">The statements below describe how engaged you feel at work. Please indicate your level of engagement on the scale below:</td></tr>
';
$result = mysqli_query($con, "SELECT * FROM quiz WHERE qtype='engagement'");

while ($row = mysqli_fetch_array($result)) {
	$i++;	
	echo "<tr>";
	echo "<td>".$i."</td><td>" . $row['question'] . "</td>";
	echo '<td>  <table>';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<tr><td>' . $row["op1"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='1';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		{echo '<tr><td>' . $row["op2"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='2';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		{echo '<tr><td>' . $row["op3"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='3';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		{echo '<tr><td>' . $row["op4"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='4';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		{echo '<tr><td>' . $row["op5"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='5';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		{echo '<tr><td>' . $row["op6"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='6';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		{echo '<tr><td>' . $row["op7"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='7';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		{echo '<tr><td>' . $row["op8"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='8';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		{echo '<tr><td>' . $row["op9"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='9';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
		{echo '<td>' . $row["op10"] . '</td>';
		echo '<td>'; 
		$sql = "SELECT COUNT(DISTINCT res_email) FROM survey where response".($i)."='10';";
		$res_tmp = mysqli_query($con,$sql);
		$rowin = mysqli_fetch_array($res_tmp);
		echo $rowin[0].'</td></tr>';}
	echo '</table></td>';
	echo "</tr>";
}

echo '
</table>
</body>
</html>
';
mysqli_close($con);

?>