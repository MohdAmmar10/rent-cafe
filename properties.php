<?php session_start();?>
<html>
<head>
    <link rel="stylesheet" href="properties.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        $search=0;
        $faver=$loc=$searchErr="";
        if(isset($_POST["submit"]))
        {
            if (empty($_POST["search"])) 
            {
                $searchErr = 'Location is Required';
            }
            else
            {
                $loc=$_POST["search"];
                $search=1;
            }
        }
        if(isset($_POST["fav"]))
        {
            $server = "localhost";
            $username = "root";
            $pass = "";
            $dbname = "rent_cafe";

            // Create database connection
            $conn = mysqli_connect($server, $username, $pass, $dbname);
            $email= $_COOKIE['EMAIL'];
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }
            $query="insert into saved_later(email,fpid) values(?,?)";
            $pst=mysqli_prepare($conn,$query);
            mysqli_stmt_bind_param($pst,"si",$email,$_POST["pid"]);
            mysqli_stmt_execute($pst);
        }
        if(isset($_POST["contact"])&&$_POST["contact"]=="Contact Now")
        {
            $server = "localhost";
            $username = "root";
            $pass = "";
            $dbname = "rent_cafe";
            // Create database connection
            $db = new mysqli($server, $username, $pass, $dbname);
            $conn = mysqli_connect($server, $username, $pass, $dbname);
            // Check connection
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            $pid=$_POST["pid"];
            $sql = "SELECT email FROM properties_details WHERE pid LIKE '%$pid%'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $pemail=$row['email'];
            }
            } else {
            echo "0 results";
            }
            $sql = "SELECT * FROM client_details WHERE email LIKE '%$pemail%'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $pphone=$row["phone"];
            }
            } else {
            echo "10 results";
            }

            mysqli_close($conn);




        }
    ?>
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
				<li class="nav-item">
        			<a class="nav-link" href="contact.html" style="margin-right: 1.2rem; font-weight: bold;">CONTACT US</a>
				</li>
				<?php if(isset($_COOKIE['EMAIL'])) : ?>
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
<div class="row mt-4 mx-4">
    <div class="col-md-8">
        <h2 class="font-weight-bold mb-2 text-left">Properties for Rent</h2>
        <p class="font-italic text-muted text-left mb-4">Properties compatible with your preference</p>
    </div>
    <div class="col-md-4 align-self-center">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="d-flex justify-content-end" method="post">
        <i class="fa fa-search align-self-center mr-1" aria-hidden="true"></i> <input type="text" placeholder="Location" name="search"> <input style="background-color:#12213F; color:white; margin-left:5px" value="Search" name="submit" type ="submit">
        <br><span class="text-center"><?php echo $searchErr;?></span>
        </form>
    </div>
</div>
<div class="container pb-5 pt-2">
    <!-- First Row [Prosucts]-->
    <div class="row pb-5 mb-4">
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

        // Get images from the database
        if($search==0)
        {$query = $db->query("SELECT * FROM properties_details ORDER BY pid ASC");}
        else
        {$query = $db->query("SELECT * FROM properties_details WHERE small_addr LIKE '%$loc%'");}

        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageURL = 'asset/'.$row["cover_pic"];
        ?>
       
        <div class="col-lg-3 col-md-6 mb-4 mx-auto">
            <!-- Card-->
            <a class="custom-card" href="prop_details.php">
            <div class="card rounded shadow border-0">
                <div class="card-header"><img class="header-img" src="<?php echo $imageURL; ?>" alt="" class="img-fluid d-block mx-auto "></div>
                <div class="card-body p-3">
                    <h5><?php echo $row["size"];?></h5>
                    <p class="small text-muted font-italic"><?php echo $row["small_addr"];?>, Mumbai</p>
                    <h5>₹ <?php echo $row["price"];?></h5>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <input type="hidden" name="pid" value="<?php echo $row['pid']; ?>"/>
                        <input class="cn-bt" id="myModal" value="Contact Now" type="submit" name="contact" data-toggle="modal" data-target="#exampleModalCenter"/>
                        <!-- Modal -->
                        <button type="submit" name="fav" class="fa fa-heart pull-right" style="font-size:30px;color:red; border: 0; background-color: white;"></button>
                    </form>

                    <!-- <a class="fa fa-heart pull-right" href="#" style="font-size:30px;color:red"></a> -->
                </div>
            </div>
            </a>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle">Owner Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            
            ?>
            <div class="modal-body">
                <p><strong>Email ID:</strong> <?php echo $pemail; ?></p>
                <hr>
                <p><strong>Phone No.:</strong> <?php echo $pphone; ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Contact Owner</button>
            </div>
            </div>
        </div>
        </div>
        </div>
        <?php }
        }else{ ?>
           <div class="d-flex m-auto justify-content-center"> <h4 class="text-center">No Properties Found ....</h4></div>
        <?php } ?>
        
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-2">
            <!-- Card-->
            <div class="card rounded shadow border-0">
                <div class="card-header"><img class="header-img" src="asset/prop2.jpg" alt="" class="img-fluid d-block mx-auto "></div>
                <div class="card-body p-3">
                    <h5>2 BHK Flat</h5>
                    <p class="small text-muted font-italic">Colaba, Mumbai</p>
                    <h5>₹ 60,000</h5>
                    
                    <a class="cn-bt">Contact Now</a>
                    <a class="fa fa-heart pull-right" href="#" style="font-size:30px;color:red"></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow border-0">
                <div class="card-header"><img class="header-img" src="asset/prop3.jpg" alt="" class="img-fluid d-block mx-auto "></div>
                <div class="card-body p-3">
                    <h5>1 BHK Flat</h5>
                    <p class="small text-muted font-italic">Thane, Mumbai</p>
                    <h5>₹ 20,000</h5>
                    <a class="cn-bt">Contact Now</a>
                    <a class="fa fa-heart pull-right" href="#" style="font-size:30px;color:red"></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow border-0">
                <div class="card-header"><img class="header-img" src="asset/prop4.jpg" alt="" class="img-fluid d-block mx-auto "></div>
                <div class="card-body p-3">
                    <h5>1 BHK Flat</h5>
                    <p class="small text-muted font-italic">Andheri, Mumbai</p>
                    <h5>₹ 50,000</h5>
                    <a class="cn-bt">Contact Now</a>
                    <a class="fa fa-heart pull-right" href="#" style="font-size:30px;color:red"></a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>




