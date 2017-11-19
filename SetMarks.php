<html>
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
 background: url(marks.jpg) no-repeat center center fixed;
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
      background-color: white;
      padding: 100px;
      margin:auto;
      top:150;
      right:100;
      bottom:-60;
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
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="HomePage.html"><strong>Student Friendly College </strong></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><strong>Set marks for STUDENT</strong></a></li>
      <li><a href="AdminDash.html"><strong>Go back to Dashboard</strong></a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right ">

   <li><a href="AdminLogin.php" class="btn  btn-lg">
        <strong> Log out
      </strong>  </a></li></ul>
  </div>
</nav>
<center>
  <h1 style="color:white">Please Enter the student's marks</h1>
  <form action="SetMarks.php" method="post" class="form_bg  ">
      <input type="text" name="USN" autofocus required placeholder="Student ID" class="form-control"></input><br />
      <input type = "text" name = "OS"  autofocus required placeholder="Operating System" class="form-control"></input><br />
      <input type = "text" name = "FLAT"  autofocus required placeholder="Formal Language And Automata Theory" class="form-control"></input><br />
      <input type = "text" name = "SP"  autofocus required placeholder="System Programming" class="form-control"></input><br />
      <input type = "text" name = "ELECTIVE"  autofocus required placeholder="Program Elective" class="form-control"></input><br />
      <input type = "text" name = "DBMS"  autofocus required placeholder="Database Management System" class="form-control"></input><br />
      <button type = "submit" class="btn btn-info btn-lg" onclick="success()" >Submit</button>
  </form></center>
  <?php
error_reporting(0);
$conn = new mysqli("localhost", "root", "", "Student_Friendly_College");

if ($conn->connect_error)
	{
	die("connection failed" . $conn->connect_error);
	}

$sql = "insert into  Student_Marks values('" . $_POST["USN"] . "','" . $_POST["OS"] . "','" . $_POST["FLAT"] . "','" . $_POST["SP"] . "','" . $_POST["ELECTIVE"] . "','" . $_POST["DBMS"] . "');";

if ($conn->query($sql) == TRUE);
?>
  <script>function success(){
    window.alert("Marks update success");
  }</script>
</body>
</html>
