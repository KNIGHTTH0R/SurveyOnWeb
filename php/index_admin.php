<?php

$i=0;
$username = "clubt3yy_admin";
$password = "15111993";
$database = "clubt3yy_quiz_portal";
$con = mysqli_connect("localhost",$username,$password,$database);
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Count total questions
$sql = "SELECT COUNT(qno) FROM quiz;";

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$count=$row[0];

echo '
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
<script>
function validateForm(i) {
    	
	var x = document.forms["myform"]["res_name"].value;
    if (x == null || x == "") {
        x.focus();	
        alert("Name must be filled out");
        return false;
    }

	var x = document.forms["myform"]["res_age"].value;
    if (x == null || x == "") {
        x.focus();	
        alert("Age name must be filled out");
        return false;
    }
	
	var x = document.forms["myform"]["res_sex"].value;
    if (x == null || x == "") {
        x.focus();	
        alert("Gender must be selected");
        return false;
    }
		
    var x = document.forms["myform"]["res_email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
    	x.focus();
        alert("Not a valid e-mail address");
        return false;
    }
	
	var x = document.forms["myform"]["res_organization"].value;
    if (x == null || x == "") {
        x.focus();
        alert("Organization must be filled out");
        return false;
    }
	
	var x = document.forms["myform"]["res_designation"].value;
    if (x == null || x == "") {
        x.focus();
        alert("Designation must be filled out");
        return false;
    }
    
    var x = document.forms["myform"]["res_workex"].value;
    if (x == null || x == "") {
        x.focus();	
        alert("Work experience must be filled out (in years)");
        return false;
    }
	
	var x = document.forms["myform"]["res_workex"].value;
    // regular expression to match required date format
    re = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
    if(x != \'\' && !x.match(re)) {
      alert("Invalid date format: " + x);
      x.focus();
      return false;
    }
	
	for (var j = 0; j < i; j++) { 
    var x = document.forms["myform"]["response"+j].value;
    if (x == null || x == "") {
        x.focus();	
        alert("Response must be selected");
        return false;
    }
}
}
</script>



</script>
</head>
<body>

<div align="left" style="opacity:1; font-size:18px; color:#585858; position:absolute; top:0px; left:0px; right:0px; width:100%; margin-top:0px; margin-left:0px; margin-right:0px; height:25px; background-color: #33CCFF; border-bottom-width:1px; border-bottom-style:inset; border-color:#3399FF;">
<table broder="0" width="100%">
<tr>
<td width="85%"><b>Psychological Empowerment Survey</b></td>
<td width="5%"><b><a href="index.php" align="right"><div width="20px" height="20px"><img width="20px" height="20px" src="../img/home.png"></div></a></b></td>
<td width="5%"><b><a href="add_question.php" align="right"><div width="20px" height="20px"><img width="20px" height="20px" src="../img/add.png"></div></a></b></td>
<td width="5%"><b><a href="report.php" align="right"><div width="20px" height="20px"><img width="20px" height="20px" src="../img/report.png"></div></a></b></td>
</table>
</div>


Dear Respondent,
<p>I am doing a research on Antecedents and Consequences of Psychological Empowerment and need information about the empowerment levels in Indian Managers. I solicit your kind cooperation in filling the questionnaires. Please spare your valuable time in responding to the questions. The responses given will be kept strictly confidential and will be used for academic purpose only. </p>

<form action="process.php" name="myform" id="myform" onsubmit="return validateForm('.$count.');" method="POST">
<table class="TFtable1">
	<tr><td align="center" colspan="3"><b>Basic Details</b></td></tr>
	<tr><td>Respondent Name</td><td><input required="required" type="text" name="res_name"></td></tr>
	<tr><td>Respondent Age</td><td><input required="required" type="number" name="res_age"></td></tr>
	<tr><td>Respondent Sex</td><td><input required="required" type="radio" name="res_sex" value="male">Male &nbsp; <input required="required" type="radio" name="res_sex" value="female">Female</td></tr>
	<tr><td>Respondent Email ID</td><td><input required="required" type="email" name="res_email"></td></tr>
	<tr><td>Respondent Organization</td><td><input required="required" type="text" name="res_organization"></td></tr>
	<tr><td>Respondent Designation</td><td><input required="required" type="text" name="res_designation"></td></tr>
	<tr><td>Respondent total work experience(in years)</td><td><input required="required" type="number" min="0" value="0" name="res_workex"></td></tr>
	<tr><td>Date</td><td><input required="required" type="text" name="date"> &nbsp; (dd/mm/yyyy)</td></tr>
</table>
<br>
<table class="TFtable">
	<tr><td align="center" colspan="3"><b>ORGANISATION CULTURE </b></td></tr>
	<tr><td align="center" colspan="3">For each of the statements described below, please indicate the extent to which your organization focuses upon each practice.</td></tr>
';
$result = mysqli_query($con, "SELECT * FROM quiz WHERE qtype='organisation_culture'");
while ($row = mysqli_fetch_array($result)) {
	$i++;
	echo "<tr>";
	echo "<td>".$i."</td><td>" . $row['question'] . "</td>";
	echo '<td>  <select required="required" name="response'.$i.'">';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<option value="">SELECT ANY</option>'; echo '<option value="1">' . $row["op1"] . '</option>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		echo '<option value="2">' . $row["op2"] . '</option>';
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		echo '<option value="3">' . $row["op3"] . '</option>';
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		echo '<option value="4">' . $row["op4"] . '</option>';
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		echo '<option value="5">' . $row["op5"] . '</option>';
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		echo '<option value="6">' . $row["op6"] . '</option>';
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		echo '<option value="7">' . $row["op7"] . '</option>';
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		echo '<option value="8">' . $row["op8"] . '</option>';
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		echo '<option value="9">' . $row["op9"] . '</option>';
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
		echo '<option value="10">' . $row["op10"] . '</option>';
	echo '</select>  </td>';
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
	echo '<td>  <select required="required" name="response'.$i.'">';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<option value="">SELECT ANY</option>'; echo '<option value="1">' . $row["op1"] . '</option>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		echo '<option value="2">' . $row["op2"] . '</option>';
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		echo '<option value="3">' . $row["op3"] . '</option>';
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		echo '<option value="4">' . $row["op4"] . '</option>';
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		echo '<option value="5">' . $row["op5"] . '</option>';
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		echo '<option value="6">' . $row["op6"] . '</option>';
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		echo '<option value="7">' . $row["op7"] . '</option>';
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		echo '<option value="8">' . $row["op8"] . '</option>';
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		echo '<option value="9">' . $row["op9"] . '</option>';
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
		echo '<option value="10">' . $row["op10"] . '</option>';
	echo '</select>  </td>';
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
	echo '<td>  <select required="required" name="response'.$i.'">';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<option value="">SELECT ANY</option>'; echo '<option value="1">' . $row["op1"] . '</option>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		echo '<option value="2">' . $row["op2"] . '</option>';
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		echo '<option value="3">' . $row["op3"] . '</option>';
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		echo '<option value="4">' . $row["op4"] . '</option>';
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		echo '<option value="5">' . $row["op5"] . '</option>';
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		echo '<option value="6">' . $row["op6"] . '</option>';
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		echo '<option value="7">' . $row["op7"] . '</option>';
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		echo '<option value="8">' . $row["op8"] . '</option>';
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		echo '<option value="9">' . $row["op9"] . '</option>';
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
		echo '<option value="10">' . $row["op10"] . '</option>';
	echo '</select>  </td>';
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
	echo '<td>  <select required="required" name="response'.$i.'">';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<option value="">SELECT ANY</option>'; echo '<option value="1">' . $row["op1"] . '</option>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		echo '<option value="2">' . $row["op2"] . '</option>';
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		echo '<option value="3">' . $row["op3"] . '</option>';
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		echo '<option value="4">' . $row["op4"] . '</option>';
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		echo '<option value="5">' . $row["op5"] . '</option>';
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		echo '<option value="6">' . $row["op6"] . '</option>';
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		echo '<option value="7">' . $row["op7"] . '</option>';
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		echo '<option value="8">' . $row["op8"] . '</option>';
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		echo '<option value="9">' . $row["op9"] . '</option>';
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
		echo '<option value="10">' . $row["op10"] . '</option>';
	echo '</select>  </td>';
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
	echo '<td>  <select required="required" name="response'.$i.'">';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<option value="">SELECT ANY</option>'; echo '<option value="1">' . $row["op1"] . '</option>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		echo '<option value="2">' . $row["op2"] . '</option>';
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		echo '<option value="3">' . $row["op3"] . '</option>';
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		echo '<option value="4">' . $row["op4"] . '</option>';
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		echo '<option value="5">' . $row["op5"] . '</option>';
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		echo '<option value="6">' . $row["op6"] . '</option>';
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		echo '<option value="7">' . $row["op7"] . '</option>';
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		echo '<option value="8">' . $row["op8"] . '</option>';
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		echo '<option value="9">' . $row["op9"] . '</option>';
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
		echo '<option value="10">' . $row["op10"] . '</option>';
	echo '</select>  </td>';
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
	echo '<td>  <select required="required" name="response'.$i.'">';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<option value="">SELECT ANY</option>'; echo '<option value="1">' . $row["op1"] . '</option>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		echo '<option value="2">' . $row["op2"] . '</option>';
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		echo '<option value="3">' . $row["op3"] . '</option>';
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		echo '<option value="4">' . $row["op4"] . '</option>';
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		echo '<option value="5">' . $row["op5"] . '</option>';
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		echo '<option value="6">' . $row["op6"] . '</option>';
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		echo '<option value="7">' . $row["op7"] . '</option>';
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		echo '<option value="8">' . $row["op8"] . '</option>';
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		echo '<option value="9">' . $row["op9"] . '</option>';
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
		echo '<option value="10">' . $row["op10"] . '</option>';
	echo '</select>  </td>';
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
	echo '<td>  <select required="required" name="response'.$i.'">';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<option value="">SELECT ANY</option>'; echo '<option value="1">' . $row["op1"] . '</option>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		echo '<option value="2">' . $row["op2"] . '</option>';
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		echo '<option value="3">' . $row["op3"] . '</option>';
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		echo '<option value="4">' . $row["op4"] . '</option>';
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		echo '<option value="5">' . $row["op5"] . '</option>';
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		echo '<option value="6">' . $row["op6"] . '</option>';
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		echo '<option value="7">' . $row["op7"] . '</option>';
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		echo '<option value="8">' . $row["op8"] . '</option>';
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		echo '<option value="9">' . $row["op9"] . '</option>';
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
		echo '<option value="10">' . $row["op10"] . '</option>';
	echo '</select>  </td>';
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
	echo '<td>  <select required="required" name="response'.$i.'">';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<option value="">SELECT ANY</option>'; echo '<option value="1">' . $row["op1"] . '</option>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		echo '<option value="2">' . $row["op2"] . '</option>';
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		echo '<option value="3">' . $row["op3"] . '</option>';
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		echo '<option value="4">' . $row["op4"] . '</option>';
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		echo '<option value="5">' . $row["op5"] . '</option>';
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		echo '<option value="6">' . $row["op6"] . '</option>';
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		echo '<option value="7">' . $row["op7"] . '</option>';
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		echo '<option value="8">' . $row["op8"] . '</option>';
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		echo '<option value="9">' . $row["op9"] . '</option>';
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
		echo '<option value="10">' . $row["op10"] . '</option>';
	echo '</select>  </td>';
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
	echo '<td>  <select required="required" name="response'.$i.'">';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<option value="">SELECT ANY</option>'; echo '<option value="1">' . $row["op1"] . '</option>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		echo '<option value="2">' . $row["op2"] . '</option>';
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		echo '<option value="3">' . $row["op3"] . '</option>';
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		echo '<option value="4">' . $row["op4"] . '</option>';
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		echo '<option value="5">' . $row["op5"] . '</option>';
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		echo '<option value="6">' . $row["op6"] . '</option>';
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		echo '<option value="7">' . $row["op7"] . '</option>';
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		echo '<option value="8">' . $row["op8"] . '</option>';
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		echo '<option value="9">' . $row["op9"] . '</option>';
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
		echo '<option value="10">' . $row["op10"] . '</option>';
	echo '</select>  </td>';
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
	echo '<td>  <select required="required" name="response'.$i.'">';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<option value="">SELECT ANY</option>'; echo '<option value="1">' . $row["op1"] . '</option>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		echo '<option value="2">' . $row["op2"] . '</option>';
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		echo '<option value="3">' . $row["op3"] . '</option>';
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		echo '<option value="4">' . $row["op4"] . '</option>';
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		echo '<option value="5">' . $row["op5"] . '</option>';
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		echo '<option value="6">' . $row["op6"] . '</option>';
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		echo '<option value="7">' . $row["op7"] . '</option>';
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		echo '<option value="8">' . $row["op8"] . '</option>';
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		echo '<option value="9">' . $row["op9"] . '</option>';
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
		echo '<option value="10">' . $row["op10"] . '</option>';
	echo '</select>  </td>';
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
	echo '<td>  <select required="required" name="response'.$i.'">';
	if (($row["op1"] !=='NULL')&&($row["op1"] !== null))
		{echo '<option value="">SELECT ANY</option>'; echo '<option value="1">' . $row["op1"] . '</option>';}
	if (($row["op2"] !=='NULL')&&($row["op2"] !== null))
		echo '<option value="2">' . $row["op2"] . '</option>';
	if (($row["op3"] !=='NULL')&&($row["op3"] !== null))
		echo '<option value="3">' . $row["op3"] . '</option>';
	if (($row["op4"] !=='NULL')&&($row["op4"] !== null))
		echo '<option value="4">' . $row["op4"] . '</option>';
	if (($row["op5"] !=='NULL')&&($row["op5"] !== null))
		echo '<option value="5">' . $row["op5"] . '</option>';
	if (($row["op6"] !=='NULL')&&($row["op6"] !== null))
		echo '<option value="6">' . $row["op6"] . '</option>';
	if (($row["op7"] !=='NULL')&&($row["op7"] !== null))
		echo '<option value="7">' . $row["op7"] . '</option>';
	if (($row["op8"] !=='NULL')&&($row["op8"] !== null))
		echo '<option value="8">' . $row["op8"] . '</option>';
	if (($row["op9"] !=='NULL')&&($row["op9"] !== null))
		echo '<option value="9">' . $row["op9"] . '</option>';
	if (($row["op10"] !=='NULL')&&($row["op10"] !== null))
		echo '<option value="10">' . $row["op10"] . '</option>';
	echo '</select>  </td>';
	echo "</tr>";
}

echo '
<tr><td align="center" colspan="3"><input style="width:100%; height:50px; color:red;" type="submit" value="SUBMIT"></td></tr>

</table>
</form>
</body>
</html>
';
mysqli_close($con);
?>