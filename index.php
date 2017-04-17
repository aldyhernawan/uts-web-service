<!DOCTYPE html>
<html lang="en">
<head>
  <title>TAMAGOPLANT WEATHER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <style>
 
	.container-fluid{
		text-align: justify;
	}
    .footer {
      background-color: #3a9327;
      padding: 25px;
    }
    
	.body {
      font: 400 15px Lato, arial;
      line-height: 1.8;
      color: #818181;
	}
	
	.jumbotron {
		  background-color: #3a9327;
		  color: #fff;
		  padding: 100px 25px;
		  font-family: Montserrat, sans-serif;
	  }
  </style>
</head>
<body>

<div class="jumbotron text-center">
  <h1>TAMAGOPLANT WEATHER</h1> 
  <p>Kenali cuaca hari ini dan rawat tanaman mu !! </p> 
  
</div>
<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
   
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="?contain=weather">WEATHER TODAY</a></li>
        <li><a href="?contain=myplant">MY PLANT</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
	<div class="row">
		<?php
			error_reporting(0);
			$contain=$_GET['contain'];
			if($contain=='')
			{
				include('weather.php');
			}
			else
			{
				include($contain.'.php');
			}
		?>
	</div>
</div>
<footer class="footer text-center" >
	<div class="row">
		<h4>Copyright tamagoplant weather, Powered by <a href="http://www.getbootstrap.com">getbootstrap.com</a></h4>
	</div>
	
</footer>

</body>
</html>
