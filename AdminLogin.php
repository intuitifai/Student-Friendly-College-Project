<html>
<head>
  <title>Administrator Login</title>
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
.navbar{
    background-image:none;
}
body::before {
 background: url(college3.jpg) no-repeat center center fixed;
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

}

    .form_bg {
      background-color:white;
      padding: 10px;
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
      <li class="active"><a href="#"><strong>Administrator Login</strong></a></li>
      <li><a href="StudentDash.php"><strong>Student's Section</strong></a></li>
    </ul>
  </div>
</nav>
<center>    <form action = "AdminLogin.php" method="post" class="form_bg">
  <h3>Administrator Login<h3><br>
      <h3><input type = "text" name = "adminName" autocomplete="admin" autofocus required placeholder="Username" class="form-control"></input><br><br>
      <input type = "password" name="adminPass" autocomplete="abcd" autofocus required placeholder="Password" class="form-control"></input><br></h3>
      <button type = "submit" class="btn btn-info btn-lg">LogIn</button>
    </form></center>
  <?php
  error_reporting(0);
  $conn=new mysqli("localhost","root","","Student_Friendly_College");
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
  $sql="select  * from adminTable where adminName = '".$_POST["adminName"]."' and adminPass='".$_POST["adminPass"]."';";
  $res=$conn->query($sql);
  if($res->num_rows>0){
    echo "<script> var r=confirm('You are successfully logged in'); if(r==true){window.location='AdminDash.html';}</script>";
  }
  else{
    echo "<script> window.alert('Please Enter your Login Details')</script>";
  }

  ?>
</body>
</html>
