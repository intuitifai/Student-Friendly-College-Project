<html>
<head>
  <title>UPDATE Student's Marks</title>
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
 background: url(update.jpg) no-repeat center center fixed;
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
      <a class="navbar-brand" href="#"><strong>Student Friendly College </strong></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="HomePage.html"><strong>UPDATE marks for STUDENT</strong></a></li>
      <li><a href="AdminDash.html"><strong>Go back to Dashboard</strong></a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right ">

   <li> <a href="AdminLogin.php" class="btn  btn-lg">
        <strong> Log out
      </strong>  </a></li></ul>
  </div>
</nav>
<center>
  <form action="UpdateMarks.php" method="post" class="form_bg">
    <input type="text"   required placeholder="USN  of the student" name="USN" class="form-control"></input></br>
    <h3>Choose the subject :</h3>
  <select name="subject" class="form-control">
    <option>Select a subject from Menu</option>
  <option value="OS" name="OS">Operating Sytem</option>
  <option value="FLAT" name="FLAT">Fomal Language and Automata Thoery</option>
  <option value="SP" name="">System Programming</option>
  <option value="ELECTIVE">Elective</option>
  <option value="DBMS">Database Management System</option>
</select><br />
<input type="text" required placeholder="Marks" name="UpdatedMarks" class="form-control"></input></br>
<button type="submit" class="btn btn-info btn-lg" onclick="success()">Update</button>
</form>
</center>
<?php
error_reporting(0);
$conn = new mysqli("localhost", "root", "", "Student_Friendly_College");

if ($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}

$sql = "update Student_Marks set " . $_POST["subject"] . " = '" . $_POST["UpdatedMarks"] . "' where USN='" . $_POST["USN"] . "';";

if ($conn->query($sql) == TRUE)
{
	echo " Update<br />";
}
else
{
}

?>
 <br />
</body>
<script>function success(){
  window.alert("Marks update success");
}</script>
</html>
