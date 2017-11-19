<html>
<head><title>Create all tables</title>
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
<body>
  <center><H1> This page creates all table required for this DBMS project</h1></center>
    <center>
    <form action="CreateEverything.php" method="POST">
    <button class="btn btn-lg btn-info" type="submit" value="create everything">Create Every Tables</button>
  </form>
  <?php
  $conn=new mysqli("localhost","root","","Student_Friendly_College");
  	if($conn->connect_error)
  	{
  		die("connection failed".$conn->connect_error);

  	}
  //  $sql="create database Student_Friendly_College;";
    //if($conn->query($sql))
  //  echo "Database created";
    $sql1="create table if not exists Fees(USN varchar(10),ClgFeeAmount float,MessFeeAmount float,ExamFeeAmount float,TrnsprtFeeAmount float,submitDate varchar(10));";
    $res1=$conn->query($sql1);
    if($res1)
    echo "<h3>Fees Table Created<br></h3>";
    else
    echo "Error:Fees Table not Created . Warning it may exist previously";
    $sql2="create table if not exists Student_Info(USN varchar(10),FirstName varchar(40),LastName varchar(40),Address varchar(100));";
    $res2=$conn->query($sql2);
    if($res1)
    echo "<h3>Student information Table Created</h3><br>";
    else
    echo "Error:Student Information Table not Created . Warning it may exist previously";
    $sql3="create table if not exists Student_Marks(USN varchar(10),OS int, FLAT int,SP int,ELECTIVE int,DBMS int);";
    $res3=$conn->query($sql3);
    if($res3)
    echo "<h3>Student_Marks Table Created</h3><br>";
    else
    echo "Error:Student_Marks Table not Created . Warning it may exist previously";
    $sql4="create table if not exists adminTable(adminName varchar(40),adminPass varchar(40),admin varchar(4));";
    $res4=$conn->query($sql4);
    if($res4)
    echo "<h3>admin Table Created</h3><br>";
    else
    echo "Error:Admin Table not Created . Warning it may exist previously";
    echo "<h3><a href ='AdminLogin.php'> Go to AdminDashBoard</h3></a>";
  ?></center>
</body>
</html>
