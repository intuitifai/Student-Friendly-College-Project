

<!doctype html>
<html lang="en">
<head>
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
		 background: url(feeReport.jpg) no-repeat center center fixed;
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
</head>

<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="navbar-header">
  <a class="navbar-brand" href="HomePage.html"><strong>Student Friendly College </strong></a>
  </div>
  <ul class="nav navbar-nav">
  <li class="active"><a href="StudentDash.php"><strong>Back to Previous</strong></a></li>
  </ul>

  </div>
 </nav>

				<center><h1>Feedback<h1></center>
					<div class="container">
					<div class="row">
					<div class="form_bg">
					 <div>
				      <form action="Feedback.php" method="post" >
				         <br/>

				         <div class="form-group has-feedback has-feedback-left">
<i class="form-control-feedback glyphicon glyphicon-user"></i>
				          <span> <input type="text" id="subName" class ="form-control" placeholder="Subject Name " name ="subName" autofocus accept="text/html" required></span>

				         </div>
				         <div class="form-group has-feedback has-feedback-left">
									 <i class="form-control-feedback glyphicon glyphicon-user"></i>
				        <span>   <input type="text" id="lastName" class="form-control" placeholder="Your Name " name ="last" required></span>
				         </div>
				         <div class="form-group">
									 <center>
				         <span><textarea rows="auto" cols="auto" name="comment" required placeholder="Please give your feedback" wrap="hard" style="border-radius: 5px" name="textmsg" class="form-control"></textarea></span>
				       </center></div>
				         <br/>
				         </div>
				         <div class="text-center">
				         <button class="btn btn-primary btn-lg" type="submit" value="reset" name="sub" >Submit</button>

				        </div>
				      </form>
						</div></div></div>
</center>
<?php
	error_reporting(0);
$conn = new mysqli("localhost", "root", "", "feedback");

if ($conn->connect_error)
{
	die("connection failed" . $conn->connect_error);
}

// if(isset($_POST['sub'])){
//	 echo "<script type="text/javascript">"
//	echo "alert('Congratulations ! Feedback Successfully Submitted' );"
//		 echo"</script>";
// }

$sql = "insert into feed values('" . $_POST["subName"] . "','" . $_POST["last"] . "','" . $_POST["comment"] . "');";

if ($conn->query($sql) == TRUE)
{
	$message = "Hi there! Your Last feedback response was recorded!";
	echo "<script type='text/javascript'>alert('$message');</script>";
	$msg=$_POST["textmsg"];
	$to="rahulkr9622@gmail.com";
	$sub=$_POST["subName"];
	$$headers .= 'From:rahulkr9622@gmail.com' . "\r\n";

}

// echo "<a href ='login1.html'>LogIn</a>";

else
{
	echo "Error" . $sql . "<br />" . $conn->error;
}

?>

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
