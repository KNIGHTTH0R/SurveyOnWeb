<?php
if ($_POST) {

	//Connection parameters
	$host = "localhost";
	$username = "clubt3yy_admin";
	$password = "15111993";
	$database = "clubt3yy_quiz_portal";

	//Reading POST request
	$qtype = $_POST['qtype'];
	$question = $_POST['question'];
	$op1 = $_POST['op1'];
	$op2 = $_POST['op2'];
	$op3 = $_POST['op3'];
	$op4 = $_POST['op4'];
	$op5 = $_POST['op5'];
	$op6 = $_POST['op6'];
	$op7 = $_POST['op7'];
	$op8 = $_POST['op8'];
	$op9 = $_POST['op9'];
	$op10 = $_POST['op10'];
	if ($op1 == '')
		$op1 = "NULL";
	if ($op2 == '')
		$op2 = "NULL";
	if ($op3 == '')
		$op3 = "NULL";
	if ($op4 == '')
		$op4 = "NULL";
	if ($op5 == '')
		$op5 = "NULL";
	if ($op6 == '')
		$op6 = "NULL";
	if ($op7 == '')
		$op7 = "NULL";
	if ($op8 == '')
		$op8 = "NULL";
	if ($op9 == '')
		$op9 = "NULL";
	if ($op10 == '')
		$op10 = "NULL";

	//Writing in database
	if ($question !== NULL) {
		$con = mysqli_connect($host, $username, $password, $database);
		$sql = "INSERT INTO quiz ( qtype, question, op1, op2, op3, op4, op5, op6, op7, op8, op9, op10) VALUES ('" . $qtype . "','" . $question . "','" . $op1 . "','" . $op2 . "','" . $op3 . "','" . $op4 . "','" . $op5 . "','" . $op6 . "','" . $op7 . "','" . $op8 . "','" . $op9 . "','" . $op10 . "')";
		// Execute query
		if (mysqli_query($con, $sql)) {
			echo "New Question Added Successfully";
		} else {
			echo "Error Adding Question: " . mysqli_error($con);
		}
	}
}

echo '
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
<style>
input
{
	width:100%;
}
textarea
{
	width:100%;
	height:100px;
}

</style>
</head>
<body>

<div align="left" style="opacity:1; font-size:18px; color:#585858; position:absolute; top:0px; left:0px; right:0px; width:100%; margin-top:0px; margin-left:0px; margin-right:0px; height:25px; background-color: #33CCFF; border-bottom-width:1px; border-bottom-style:inset; border-color:#3399FF;">
<table broder="0" width="100%">
<tr>
<td width="85%"><b>Psychological Empowerment Survey</b></td>
<td width="5%"><b><a href="index_admin.php" align="right"><div width="20px" height="20px"><img width="20px" height="20px" src="../img/home.png"></div></a></b></td>
<td width="5%"><b><a href="add_question.php" align="right"><div width="20px" height="20px"><img width="20px" height="20px" src="../img/add.png"></div></a></b></td>
<td width="5%"><b><a href="report.php" align="right"><div width="20px" height="20px"><img width="20px" height="20px" src="../img/report.png"></div></a></b></td>
</table>
</div>

	<form action=' . $_SERVER["PHP_SELF"] . ' method="post">
	<table class="TFtable">
        <tr><td>Question Type:</td><td>
        <select required="required" type="text" value="'.$qtype.'" name="qtype">
        <option value="organisation_culture">ORGANISATION CULTURE </option>
        <option value="hr_practices">HR PRACTICES </option>
        <option value="organisation_structure">ORGANISATION STRUCTURE </option>
  		<option value="hierarchy_of_authority">Hierarchy of authority </option>
  		<option value="formalization">Formalization </option>
  		<option value="psycological_empowerment">PSYCHOLOGICAL EMPOWERMENT </option>
  		<option value="job_satisfaction">JOB SATISFACTION </option>
  		<option value="turnover_intention">TURNOVER INTENTION </option>
  		<option value="organizational_commitment">ORGANISATIONAL COMMITMENT </option>
  		<option value="innovative_behaviour">INNOVATIVE BEHAVIOUR </option>
  		<option value="engagement">ENGAGEMENT </option>
        </select>
        </td></tr>
        <tr><td>Question:</td><td><textarea required="required" type="text" name="question">Write your Question here...</textarea><br>
        <tr><td>Option 1:</td><td><input type="text" value="'.$op1.'" name="op1"></td></tr>
        <tr><td>Option 2:</td><td><input type="text" value="'.$op2.'" name="op2"></td></tr>
        <tr><td>Option 3:</td><td><input type="text" value="'.$op3.'" name="op3"></td></tr>
        <tr><td>Option 4:</td><td><input type="text" value="'.$op4.'" name="op4"></td></tr>
        <tr><td>Option 5:</td><td><input type="text" value="'.$op5.'" name="op5"></td></tr>
        <tr><td>Option 6:</td><td><input type="text" value="'.$op6.'" name="op6"></td></tr>
        <tr><td>Option 7:</td><td><input type="text" value="'.$op7.'" name="op7"></td></tr>
        <tr><td>Option 8:</td><td><input type="text" value="'.$op8.'" name="op8"></td></tr>
        <tr><td>Option 9:</td><td><input type="text" value="'.$op9.'" name="op9"></td></tr>
        <tr><td>Option 10:</td><td><input type="text" value="'.$op10.'" name="op10"></td></tr>
        <tr><td align="center" colspan="2"><input type="submit"></td></tr>
    </form>
</body>
</html>
';
?>