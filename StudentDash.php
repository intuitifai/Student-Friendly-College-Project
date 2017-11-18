<?php
// Start the session
session_start();
?>
<html>
<head>
  <title>Administrator Dashboard</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      background-color: lightgreen;
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


    </ul>
    <ul class="nav navbar-nav navbar-right ">

   <li> <a href="StudLog.php" class="btn  btn-lg">
          <span class="glyphicon glyphicon-log-out"></span><strong> Log out
      </strong>  </a></li></ul>
  </div>
</nav>

<center><h1> Welcome <?php  echo $_SESSION["firstname"]." [".$_SESSION["usn"]."] ";?></h1></center>
<br>

<form class="form_bg">
  <table class="table table-bordered">
<tr>

  <td>
    <h3>
          <a href="#">
            <span class="glyphicon glyphicon-piggy-bank"></span>
          </a>


          <a href ="SubmitFee.php">Pay College Fees</a></h3></td>
  <td>
    <h3>
          <a href="#">
            <span class="glyphicon glyphicon-education"></span>
          </a>


  <a href ="GetMarks1.php">Get Report Card</a></h3></td>
<tr>
  <td>
    <h3>
          <a href="#">
            <span class="glyphicon glyphicon-globe"></span>
          </a>


          <a href ="GetFee1.php">Fee Reciept</a></td>
        </h3>
        <td>
          <h3>
                <a href="#">
                  <span class="glyphicon glyphicon-globe"></span>
                </a>


                <a href ="GetFee1.php">Feedback</a></td>
              </h3>

</ul>
</form>
</body>
</html>
