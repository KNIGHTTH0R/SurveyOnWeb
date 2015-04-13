<?php

$count=0;
$host = "localhost";
$username = "clubt3yy_admin";
$password = "15111993";
$database = "clubt3yy_quiz_portal";

$res_name=$_POST['res_name'];
$res_age=$_POST['res_age'];
$res_sex=$_POST['res_sex'];
$res_email=$_POST['res_email'];
$res_organization=$_POST['res_organization'];
$res_designation=$_POST['res_designation'];
$res_workex=$_POST['res_workex'];
$date=$_POST['date'];

echo '
<html>
<head>
<META http-equiv="refresh" content="5;URL=index.php">
<style type="text/css">

  @-webkit-keyframes spincube {
    from,to  { -webkit-transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg); }
    16%      { -webkit-transform: rotateY(-90deg);                           }
    33%      { -webkit-transform: rotateY(-90deg) rotateZ(90deg);            }
    50%      { -webkit-transform: rotateY(-180deg) rotateZ(90deg);           }
    66%      { -webkit-transform: rotateY(-270deg) rotateX(90deg);           }
    83%      { -webkit-transform: rotateX(90deg);                            }
  }

  @keyframes spincube {
    from,to {
      -moz-transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);
      -ms-transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);
      transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);
    }
    16% {
      -moz-transform: rotateY(-90deg);
      -ms-transform: rotateY(-90deg);
      transform: rotateY(-90deg);
    }
    33% {
      -moz-transform: rotateY(-90deg) rotateZ(90deg);
      -ms-transform: rotateY(-90deg) rotateZ(90deg);
      transform: rotateY(-90deg) rotateZ(90deg);
    }
    50% {
      -moz-transform: rotateY(-180deg) rotateZ(90deg);
      -ms-transform: rotateY(-180deg) rotateZ(90deg);
      transform: rotateY(-180deg) rotateZ(90deg);
    }
    66% {
      -moz-transform: rotateY(-270deg) rotateX(90deg);
      -ms-transform: rotateY(-270deg) rotateX(90deg);
      transform: rotateY(-270deg) rotateX(90deg);
    }
    83% {
      -moz-transform: rotateX(90deg);
      -ms-transform: rotateX(90deg);
      transform: rotateX(90deg);
    }
  }

  .cubespinner {
    -webkit-animation-name: spincube;
    -webkit-animation-timing-function: ease-in-out;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-duration: 12s;

    animation-name: spincube;
    animation-timing-function: ease-in-out;
    animation-iteration-count: infinite;
    animation-duration: 12s;

    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transform-style: preserve-3d;

    -webkit-transform-origin: 200px 200px 0;
    -moz-transform-origin: 200px 200px 0;
    -ms-transform-origin: 200px 200px 0;
    transform-origin: 200px 200px 0;
  }

  .cubespinner div {
  	opacity: .8;
    position: absolute;
    width: 400px;
    height: 400px;
    border: 1px solid #ccc;
    background-image:url("../img/bk.jpg");
	background-color:#cccccc;
    box-shadow: inset 0 0 40px rgba(0,0,0,0.2);
    line-height: 400px;
    text-align: center;
	color:#ffffff;
    font-size: 100px;
  }

  .cubespinner .face1 {
    -webkit-transform: translateZ(200px);
    -moz-transform: translateZ(200px);
    -ms-transform: translateZ(200px);
    transform: translateZ(200px);
  }
  .cubespinner .face2 {
    -webkit-transform: rotateY(90deg) translateZ(200px);
    -moz-transform: rotateY(90deg) translateZ(200px);
    -ms-transform: rotateY(90deg) translateZ(200px);
    transform: rotateY(90deg) translateZ(200px);
  }
  .cubespinner .face3 {
    -webkit-transform: rotateY(90deg) rotateX(90deg) translateZ(200px);
    -moz-transform: rotateY(90deg) rotateX(90deg) translateZ(200px);
    -ms-transform: rotateY(90deg) rotateX(90deg) translateZ(200px);
    transform: rotateY(90deg) rotateX(90deg) translateZ(200px);
  }
  .cubespinner .face4 {
    -webkit-transform: rotateY(180deg) rotateZ(90deg) translateZ(200px);
    -moz-transform: rotateY(180deg) rotateZ(90deg) translateZ(200px);
    -ms-transform: rotateY(180deg) rotateZ(90deg) translateZ(200px);
    transform: rotateY(180deg) rotateZ(90deg) translateZ(200px);
  }
  .cubespinner .face5 {
    -webkit-transform: rotateY(-90deg) rotateZ(90deg) translateZ(200px);
    -moz-transform: rotateY(-90deg) rotateZ(90deg) translateZ(200px);
    -ms-transform: rotateY(-90deg) rotateZ(90deg) translateZ(200px);
    transform: rotateY(-90deg) rotateZ(90deg) translateZ(200px);
  }
  .cubespinner .face6 {
    -webkit-transform: rotateX(-90deg) translateZ(200px);
    -moz-transform: rotateX(-90deg) translateZ(200px);
    -ms-transform: rotateX(-90deg) translateZ(200px);
    transform: rotateX(-90deg) translateZ(200px);
  }

</style>
</head>';

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
	//echo $count." questions found... <br>";

for ($i=$count; $i >0 ; $i--) {
	$response[$i]=$_POST['response'.$i.'']; 
	//echo $i.' '.$response[$i].'<br>';
}

// Inserting in table survey
$sql = "INSERT INTO survey (res_email, res_name, res_age, res_sex, res_organization, res_designation, res_workex, date) VALUES ('".$res_email."', '".$res_name."', ".$res_age.", '".$res_sex."', '".$res_organization."', '".$res_designation."', '".$res_workex."', '".$date."')";
	// Execute query
	if (mysqli_query($con, $sql)) {
	//	echo "Basic value inserted in survey table<br>";
	} else {
		echo "Error inserting values in survey table: " . mysqli_error($con);
	}

// Updating servey rocord with user values
for ($i=$count; $i >0 ; $i--) {
	$sql = "UPDATE survey SET response".$i."='".$response[$i]."' WHERE res_email='".$res_email."'";
	// Execute query
	if (mysqli_query($con, $sql)) {
	//
	} else {
		echo "Error updating response values in survey table: " . mysqli_error($con);
	}
}

echo '
<div width="100%" align="center" style=" width:100%; vertical-align:middle; color:#B0C4DE; text-align:center; position: absolute; top:0%; height:100%; "><h2>Thank you for contributing your precious time and effort for the survey</h2></div>
<div id="animate" style="vertical-align:middle; text-align:center; position: absolute; margin: 0 0 0 0; top:20%; left:35%; height:100%; ">
<div class="stage" style="width: 400px; height: 400px; text-align: center; vertical-align: middle;">
<div class="cubespinner">
<div class="face1">THANK</div>
<div class="face2">YOU</div>
<div class="face3">THANK</div>
<div class="face4">YOU</div>
<div class="face5">THANK</div>
<div class="face6">YOU</div>
</div>
</div>


';

?>