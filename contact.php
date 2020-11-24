<?php session_start();?>
<html>
<head>
    <link rel="stylesheet" href="contact.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        			<a class="nav-link" href="home.php" style="margin-right: 1.2rem; font-weight: bold;">HOME</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="solution.html" style="margin-right: 1.2rem; font-weight: bold;">HOW IT WORKS</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="properties.php" style="margin-right: 1.2rem; font-weight: bold;">PROPERTIES</a>
				</li>
				<?php if(isset($_COOKIE['EMAIL'])) : ?>
					<li class="nav-item">
						<a class="nav-link" href="mylist.php" style="margin-right: 1.2rem; font-weight: bold;">MY LISTING</a>
					</li>
					<li class="nav-item">
        			<a class="nav-link" href="myfav.php" style="margin-right: 1.2rem; font-weight: bold;">MY FAVOURITES</a>
					</li>	
					<li class="nav-item">
						<a href="profile.php" class="nav-link" style="margin-right: 1.2rem; font-weight: bold;"><?php echo $_COOKIE['EMAIL'];?></a>
					</li>
					<li class="nav-item">
						<a href="delete.php" class="btn btn-primary" style="background-color: #12213F!important;">LOGOUT</a>
					</li>
				<?php else : ?>
					<li class="nav-item">
						<a href="login.php" class="btn btn-primary" style="margin-right: 0.75rem;background-color: #12213F!important;">LOGIN</a>
					</li>
					<li class="nav-item">
						<a href="form.php" class="btn btn-primary" style="background-color: #12213F!important;">SIGNUP</a>
					</li>
				<?php endif; ?>
    		</ul>
  		</div>
	</nav>
    <?php
        $server = "localhost";
        $username = "root";
        $pass = "";
        $dbname = "rent_cafe";

        // Create database connection
        $db = new mysqli($server, $username, $pass, $dbname);

        // Check connection
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $pid=$_GET["id"];
        // Get images from the database
        $query1 = $db->query("SELECT email FROM properties_details WHERE pid LIKE '%$pid%'");
        
        if($query1->num_rows > 0){
            while($row1 = $query1->fetch_assoc()){
                $email=$row1["email"];
            }
        }
        $query = $db->query("SELECT fname,lname,phone FROM client_details WHERE email LIKE '%$email%'");
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $fname=$row["fname"];
                $lname=$row["lname"];
                $phone=$row["phone"];
            }
        }
        $uemail=$_COOKIE["EMAIL"];
        ?>
    <div class="ct text-center ">
    <table class="table">
        <thead>
            <tr align="center">
                <th scope="col">Owner Contact Details</th>
                <!-- <th scope="col">Input</th>
                <th scope="col">Output</th> -->
            </tr>
        </thead>
        <tbody>
            <tr align="center">
                <!-- <th scope="row">1</th>	 -->
                <td>Owner Name</td>
                <td><?php echo $fname." ".$lname;?></td>
            </tr>
            <tr align="center">
                <!-- <th scope="row">2</th>	 -->
                <td>Email</td>
                <td><?php echo $email;?></td>
            </tr>
            <tr align="center">
                <!-- <th scope="row">2</th>	 -->
                <td>Phone No.</td>
                <td><?php echo $phone;?></td>
            </tr>
        </tbody>
    </table>
    <a  class="btn btn-primary ml-3" style="margin-right: 0.75rem;background-color: #12213F!important;" href="notify.php?id=<?php echo$pid;?>&uemail=<?php echo $uemail;?>&owneremail=<?php echo $email;?>">Notify Owner</a> 
    </div>
    </body>
</html>