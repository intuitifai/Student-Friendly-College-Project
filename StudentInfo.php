<html>
<head>
  <title>Student's Information</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="bootstrap.css">
<style>
body::before {
 background: url(college4.jpg) no-repeat center center fixed;
 content: '';
 z-index: -1;
 width: 100%;
 height: 100%;
 position:absolute;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
 opacity: 0.5;
   filter: alpha(opacity=100);
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
      <a class="navbar-brand" href="HomePage.html"><strong>Student Friendly College </strong></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><strong>Create a NEW STUDENT</strong></a></li>
      <li><a href="AdminDash.html"><strong>Go back to Dashboard</strong></a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right ">

   <li> <a href="AdminLogin.php" class="btn  btn-lg">
          <span class="glyphicon glyphicon-log-out"></span><strong> Log out
        </strong></a></li></ul>
  </div>
</nav>
<center>
  <form action="StudentInfo.php" method="POST" class ="form_bg">
    <h1>Student Information</h1>
    <input class="form-control" type="text" name="USN" placeholder="USN" required></input><br>
    <input class ="form-control" type="text" name="FirstName" placeholder="First Name"required></input><br>
    <input class="form-control" type="text" name="LastName" placeholder="Last Name" required></input><br>
    <input class="form-control" type="text" name="Address" placeholder="Address" required></input><br>
    <button  type="submit" value="submit USN" class="btn btn-info btn-lg" onclick="success()">Submit</button>
  </form></center>
<?php
error_reporting(0);
$conn=new mysqli("localhost","root","","Student_Friendly_College");
  if($conn->connect_error)
  {
    die("connection failed".$conn->connect_error);
  }
  $sql="insert into Student_Info values('".$_POST["USN"]."','".$_POST["FirstName"]."','".$_POST["LastName"]."','".$_POST["Address"]."');";
  if($conn->query($sql)==TRUE){


  }


 ?>
</body>
<script>
function success(){
  window.alert("Student is successfully created");
}
</script>
</html>
