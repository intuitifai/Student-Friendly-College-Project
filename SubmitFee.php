<html>
<head>
  <title>
    Submit the Fee
  </title>
  <head>
    <title>Set Student marks </title>
  </head>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        background-color: white;
        padding: 100px;
        margin:auto;
        top:150;
        right:100;
        bottom:-70;
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
      <li><a href="AdminDash.html"><strong>Go back to Dashboard</strong></a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right ">

   <li> <a href="AdminLogin.php" class="btn  btn-lg">
          <span class="glyphicon glyphicon-log-out"></span><strong> Log out
        </strong></a></li></ul>
  </div>
</nav>
<center>
  <h1>Submit The Fee of the Student </h1></center>
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
