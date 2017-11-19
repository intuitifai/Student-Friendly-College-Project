<html>
<head>
  <title>
    Submit the Fee
  </title>
  <head>
    <title>Set Student marks </title>
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
   background: url(fee.jpg) no-repeat center center fixed;
   content: '';
   z-index: -1;
   width: 100%;
   height: 100%;
   position:absolute;
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;

  }

      .form_bg {
        background-color: lightgreen;
        padding: 100px;
        margin:auto;
        top:150;
        right:100;
        bottom:-140;
        left:100;
        position:absolute;
        width:600px;
        height: auto;
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
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="HomePage.html"><strong>Student Friendly College </strong></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><strong>Submit Fee </strong></a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right ">

   <li> <a href="StudentDash.php" class="btn  btn-lg">
          </span><strong> Go back to Dashboard
        </strong></a></li></ul>
  </div>
</nav>
<center>
  <h1>Welcome Student! Submit the fees here  </h1></center>
  <br />
  <center>
  <form action="SubmitFee.php" method="post" class="form_bg">
  <input type ="text" placeholder="USN" autofocus name="USN" class="form-control"></input><br />
  <input type="text" placeholder="College Fee AMOUNT here" name="ClgFeeAmount" class="form-control"></input><br />
  <input type="text" placeholder="Mess Fee AMOUNT here" name="MessFeeAmount" class="form-control"></input><br />
  <input type="text" placeholder="Exam Fee AMOUNT here" name="ExamFeeAmount" class="form-control"></input><br />
  <input type="text" placeholder="Transport Fee AMOUNT here" name="TrnsprtFeeAmount" class="form-control"></input><br />
  <input type="date" name="submitDate" class="form-control"></input><br />
  <button type="submit" value="Submit the fee" class="btn btn-info btn-lg" onclick="success()">Submit</button>
</form>
</center>
<?php
error_reporting(0);
$conn = new mysqli("localhost", "root", "", "Student_Friendly_College");

if ($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}

$sql = "insert into Fees values('" . $_POST["USN"] . "','" . $_POST["ClgFeeAmount"] . "','" . $_POST["MessFeeAmount"] . "','" . $_POST["ExamFeeAmount"] . "','" . $_POST["TrnsprtFeeAmount"] . "','" . $_POST["submitDate"] . "');";

if ($conn->query($sql) == TRUE)
{
}
?>
</body>
<script>function success(){
  window.alert("Submitted Fees Successfully");
}</script>
</html>
