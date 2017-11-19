<html>
<head>
  <title>Fee Details</title>

</head>
<meta charset="utf-8" />
<link rel="icon" type="image/png" href="assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>Feedback Page</title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!-- Bootstrap core CSS     -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Animation library for notifications   -->
  <link href="assets/css/animate.min.css" rel="stylesheet"/>

  <!--  Light Bootstrap Table core CSS    -->
  <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<style>
body::before {
 background: url(feeReport.jpg) no-repeat center center fixed;
 content: '';
 z-index: -1;
 width: 100%;
 height: 100%;
 position:absolute;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
 -webkit-filter: blur(5px);
 -moz-filter: blur(5px);
 -o-filter: blur(5px);
 -ms-filter: blur(5px);
 filter: blur(5px);
}

    .form_bg {
      background-color: lightgreen;
      padding: 20px;
      margin:auto;
      top:0;
      right:0;
      bottom:0;
      left:0;
      position:absolute;
      width:400px;
      height: 400px;
      border-radius: 5%;

    }
  mark {
   background-color: lightgreen;
   color: black;


}
.button:hover {
   background-color: #4CAF50; /* Green */
   color: white;
}
li {
   margin-right: 40px;
}
.nav2 li {
   margin-right: 10px;
}

</style>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="navbar-header">
  <a class="navbar-brand" href="HomePage.html"><strong>Student Friendly College </strong></a>
  </div>
  <ul class="nav navbar-nav">
  <li><a href="StudentDash.php"><strong>Go to dashboard</strong></a></li>
  </ul>

  </div>
 </nav>
 </center>

<?php
echo "<br><br><form class='form_bg' >";
echo " <table class='table table-hover'>";
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="Student_Friendly_College";
//create connection
 $conn=new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
  die("Connection failed".$conn->connect_error);

 }
  $sql="select * from Fees where USN='".$_POST["USN"]."';";
  $result=$conn->query($sql);

  if($result->num_rows>0){

  while($row=$result->fetch_assoc()){
    echo "<tr><td><strong>USN:</td><td><strong>".$row["USN"]."</strong></td><tr><td><strong>College Fee Amount :</td><td><strong>".$row["ClgFeeAmount"]."</strong></td><tr><td><strong>Mess Fee Amount :</td><td><strong>".$row["MessFeeAmount"]."</strong></td><tr><td><strong>Exam Fee Amount :</strong></td><td><strong>".$row["ExamFeeAmount"]."</strong></td><tr><td><strong>Transport Amount Fee :</strong></td><td><strong>".$row["TrnsprtFeeAmount"]."</strong></td><tr><td><strong>Submitted ON :</strong></td><td><strong>".$row["submitDate"]."</strong></td></tr>";
    $SemFees=$row["ClgFeeAmount"]+$row["MessFeeAmount"]+$row["ExamFeeAmount"]+$row["TrnsprtFeeAmount"];
    echo "<tr><td><strong>Total Fees Submitted</strong><td><strong>$SemFees</strong></td></tr>";
    echo "</table>";
  }
 }
 else{
  echo "0 results";
 }
 $conn->close();
 echo "</form>";
 ?>
 </center>
 </body>
 </html>
