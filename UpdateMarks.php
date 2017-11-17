<html>
<head>
  <title>UPDATE Student's Marks</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="bootstrap.css">
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
          <span class="glyphicon glyphicon-log-out"></span><strong> Log out
        </strong></a></li></ul>
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
