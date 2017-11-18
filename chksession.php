<html>

<body>
  <form method="post" action="chksession.php"><input type="text" name="USN"></input>
  <button type="submit">click</button></form>
<?php
session_start();
$conn=new mysqli("localhost","root","","Student_Friendly_College");
if($conn->connect_error)
{
  die("connection failed".$conn->connect_error);
}
$sql="select  FirstName from Student_Info where USN = '".$_POST["USN"]."';";
$res=$conn->query($sql);
if($res->num_rows>0){
  while($row=$res->fetch_assoc()){
echo $row["FirstName"];

}
}
$sql2="select LastName from Student_Info where USN ='".$_POST["USN"]."';";

$res2=$conn->query($sql2);
if($res2->num_rows>0){
  while($row2=$res2->fetch_assoc()){
echo $row2["LastName"];

}
}
?>
</body>
</html>
