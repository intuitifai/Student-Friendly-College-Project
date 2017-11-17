<html>
<head>
  <title>Fetching marks</title>

</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="bootstrap.css">
<style>
body::before {
 background: url(result.jpg) no-repeat center center fixed;
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

<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="navbar-header">
  <a class="navbar-brand" href="HomePage.html"><strong>Student Friendly College </strong></a>
  </div>
  <ul class="nav navbar-nav">
  <li class="active"><a href="#"><strong>Fetching marks details</strong></a></li>
  <li><a href="AdminDash.html"><strong>Go back to Dashboard</strong></a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right ">
  <li> <a href="AdminLogin.php" class="btn  btn-lg">
  <span class="glyphicon glyphicon-log-out"></span><strong> Log out
  </strong></a></li></ul>
  </div>
  </nav>
  <center>
  <form action="GetMarks.php" method="POST" class="form_bg">
  <h1>Student's USN:</h1>
  <input type="text" name="USN" class="form-control"></input><br>
  <button type="submit" value="submit" class="btn btn-info btn-lg">Submit</button><br>
  </form>
  </center>
</body>
</html>
