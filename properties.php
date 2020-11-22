<html>
<head>
    <link rel="stylesheet" href="properties.css">
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
<div class="container py-5">
    <!-- First Row [Prosucts]-->
    <h2 class="font-weight-bold mb-2">From the Shop</h2>
    <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
    
    <div class="row pb-5 mb-4">
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 mx-auto">
            <!-- Card-->
            <a class="custom-card" href="prop_details.php">
            <div class="card rounded shadow border-0">
                <div class="card-header"><img class="header-img" src="asset/prop1.jpg" alt="" class="img-fluid d-block mx-auto "></div>
                <div class="card-body p-3">
                    <h5>2 BHK Flat</h5>
                    <p class="small text-muted font-italic">Byculla, Mumbai</p>
                    <h5>₹ 40,000</h5>
                    <a class="cn-bt">Contact Now</a>
                    <a class="fa fa-heart pull-right" href="#" style="font-size:30px;color:red"></a>
                </div>
            </div>
            </a>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
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




