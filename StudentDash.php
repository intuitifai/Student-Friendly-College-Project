
<html>
<head>
  <title>Administrator Dashboard</title>
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
 background: url(white.jpg) no-repeat center center fixed;
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
      padding: 50px;
      margin:auto;
      top:200;
      right:100;
      bottom:-10;
      left:100;
      position:absolute;
      width:auto;
      height: auto;
      border-radius: 0;

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
      <li class="active"><a href="#"><strong>Student DashBoard</strong></a></li>
      <li><a href="AdminLogin.php"><strong>Not a Student?Login as ADMIN</strong></a></li>

    </ul>

  </div>
</nav>
<?php session_start();
//echo session_id();
echo $_SESSION["usn"];
?>


<form class="form_bg">
  <table class="table table-bordered">
<tr>

  <td>
    <h3>
          <a href="#">
            <span class="glyphicon glyphicon-piggy-bank"></span>
          </a>


          <a href ="SubmitFeeStudent.php">Pay College Fees</a></h3></td>
  <td>
    <h3>
          <a href="#">
            <span class="glyphicon glyphicon-education"></span>
          </a>


  <a href ="GetMarksByStudent.php">Get Report Card</a></h3></td>
<tr>
  <td>
    <h3>
          <a href="#">
            <span class="glyphicon glyphicon-globe"></span>
          </a>


          <a href ="GetFeeByStudent.php">Fee Reciept</a></td>
        </h3>
        <td>
          <h3>
                <a href="#">
                  <span class="glyphicon glyphicon-globe"></span>
                </a>


                <a href ="Feedback.php">Feedback</a></td>
              </h3>

</ul>
</form>
</body>
</html>
