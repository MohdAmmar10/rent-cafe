<?php session_start();?>
<html>
<head>
	<title>Rent Cafe</title>
	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital@0;1&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<!-- <?php 
		$_SESSION["email"] =  $_COOKIE['EMAIL'];
		$_SESSION["pass"] = $_COOKIE['PASSWORD']; 
	?> -->
</head>
<body>
	<nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
  		<img src="asset/Logo.svg">
  		<button class="navbar-toggler" data-toggle="collapse" data-target="#navlinks" aria-label="Togglenavigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
		<div class="collapse navbar-collapse" id="navlinks">
    		<ul class="navbar-nav ml-auto">
      			<li class="nav-item">
        			<a class="nav-link" href="home.php	" style="margin-right: 1.2rem; font-weight: bold;">HOME</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="solution.html" style="margin-right: 1.2rem; font-weight: bold;">HOW IT WORKS</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="team.html" style="margin-right: 1.2rem; font-weight: bold;">ABOUT US</a>
				</li>
				<li class="nav-item">
        			<a class="nav-link" href="contact.html" style="margin-right: 1.2rem; font-weight: bold;">CONTACT US</a>
      			</li>
				<li class="nav-item">
      				<a href="delete.php" class="btn btn-primary" style="background-color: #12213F!important;">LOGOUT</a>
      			</li>
    		</ul>
  		</div>
	</nav>
	<!-- <h1> <?php echo "Your email id is ".$_SESSION["email"]; ?> -->
	<div class="content">
		<div class="home_content fliud-container pr-3">
			<div class="row p-0">
				<div class="img_left col-12 col-md-6 p-0">
				</div>
				<div class="content_right col-12 col-md-6 p-0 justify-content-center">
					<div class="intro">
						<h1>Simple, Smarter Home Search</h1>
						<p>
							Everything you need to get your  Home<br>
							Faster & Easier
						</p>
						<a href="#" id="hbtn" class="btn btn-primary">How It Works?</a>
					</div>
				</div>		
			</div>
		</div>
		<div class="about_us pt-4 pb-2">
			<h1>About Us</h1>
			<p>
			Rent Cafe is a Mumbai based start-up, started by a group of friends from KJSCE, Mumbai with an aim to make the<br>
			relocation journey stress free without having to spend valuable time searching for flats, furniture and related<br>
			essential relocation services such as packer & movers.<br><br>
			To assist you in your relocation journey, Rent Cafe provides a one-stop solution for all your relocation needs starting<br> 
			from finding a perfect home matching your requirements. We will handpick the right properties for you matching<br>
			your requirements and budget and, guess what, you get to visit your shortlisted properties as per your schedule.<br><br>
			Other services include Find a Flat-mate, Buy or Sell used items, and find cooks/housemaids.<br><br>
			Isn’t it simple?
			</p>
		</div>
		<div class="our_services">
			<h1>Our Services</h1>
			<img src="asset/LandingOurServices.jpg">
		</div>
	</div>
</body>
</html>