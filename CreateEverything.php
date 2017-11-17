<html>
<head><title>Create all tables</title>
</head>
<body>
  <H1> This page creates all table required for this DBMS project</h1>
    <form action="CreateEverything.php" method="POST">
    <input type="submit" value="create everything"></input>
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
    echo "Fees Table Created";
    else
    echo "Error:Fees Table not Created . Warning it may exist previously";
    $sql2="create table if not exists Student_Info(USN varchar(10),FirstName varchar(40),LastName varchar(40),Address varchar(100));";
    $res2=$conn->query($sql2);
    if($res1)
    echo "Student information Table Created";
    else
    echo "Error:Student Information Table not Created . Warning it may exist previously";
    $sql3="create table if not exists Student_Marks(USN varchar(10),OS int, FLAT int,SP int,ELECTIVE int,DBMS int);";
    $res3=$conn->query($sql3);
    if($res3)
    echo "Student_Marks Table Created";
    else
    echo "Error:Student_Marks Table not Created . Warning it may exist previously";
    $sql4="create table if not exists adminTable(adminName varchar(40),adminPass varchar(40),admin varchar(4));";
    $res4=$conn->query($sql4);
    if($res4)
    echo "admin Table Created";
    else
    echo "Error:Admin Table not Created . Warning it may exist previously";
    echo "<a href ='AdminLogin.php'> Go to AdminDash</a>";
  ?>
</body>
</html>
