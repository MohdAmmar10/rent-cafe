<!DOCTYPE html>
<html>
<head>
	<title>Preference Form</title>
	<link rel="stylesheet" href="prefer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
		if(isset($_POST['back']))
		{
			header("Location: prefer1.php");
		}
		if(isset($_POST['next']))
		{
			header("Location: prefer3.php");
		}
	?>
	<div id="fullcontainer" class="container bg-white justify-content-around">
        <div class="row">
        	<div class="form_left col-12 col-md-6">
                <img src="asset/Logo.svg" width="auto" height="auto" class="d-none d-md-block px-3" style="margin-top: 10%; margin-left: 5%;">
            </div>
        </div>
        <div class="row">
        	<div class="form_left col-12 col-md-6">
			<p style="font-size: 30px; margin-left:8%; margin-top: 30px;"><b>Perference Form</b><br>Hello <?php echo  $_COOKIE['EMAIL']; ?></p>
                <div class="d-flex flex-md-row px-3 mt-4 flex-column-reverse">
                    <div class="col-md-6" style="padding-right: 12%; margin-left: 0;"><!-- 
                        	<div class="card1">
                            	<ul id="progressbar" class="text-center">
                                	<li class="active step0"></li>
                                	<li class="step0"></li>
                                	<li class="step0"></li>
                            	</ul>
                            	<h6 class="mb-5">User’s Personality</h6>
                            	<h6 class="mb-5">Perference with Apartment</h6>
                            	<h6 class="mb-5">Perference with Roomate</h6>
                        	</div> -->
                        <img src="asset/p2.jpg" class="d-none d-md-block px-3" >
                    </div>
                </div>
            </div>
	        <div class="form_right col-12 col-md-6 justify-content-center" style="margin-left: 0px; margin-bottom: 10%;"><br>
	           	<div class="col-md-6">
	                <div class="card text-center" id="formbg" style="background-color: rgba(253,210,0,0.26);  width:30rem; border-radius: 20px !important;">
						<h3 style="margin-top: 10%; margin-bottom: 5%;">User Preference with apartment</h3>
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
							<label for="gender">&emsp;&emsp;Nearest to public transport?</label>&emsp;
			                <label class="rad">
			                    <input type="radio" name="trans" value="yes">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Yes</span>&emsp;
			                <label class="rad">
			                    <input type="radio" name="trans" value="no">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">No</span><br><br>

			                <label for="gender">&emsp;&emsp;Rectifying Problems?</label>&emsp;
			                <label class="rad">
			                    <input type="radio" name="problem" value="owner">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Owner</span>&emsp;
			                <label class="rad">
			                    <input type="radio" name="problem" value="you">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">You</span><br><br>

			                <label for="gender">&emsp;&emsp;What ammentites you want?</label>&emsp;
			                <label class="checkbox-inline">
						      <input type="checkbox" value="wifi" name="ammentites"></label><span class="rad_label">WIFI</span>&emsp;
						    <label class="checkbox-inline">
						      <input type="checkbox" value="ac" name="ammentites"></label><span class="rad_label">AC</span>&emsp;
						    <label class="checkbox-inline">
						      <input type="checkbox" value="tv" name="ammentites"></label><span class="rad_label">TV</span>
			                <br><br>
			                
			                <label for="gender">&emsp;&emsp;Type of Bed:</label>&emsp;
			                <label class="rad">
			                    <input type="radio" name="bed" value="single">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Single</span>&emsp;
			                <label class="rad">
			                    <input type="radio" name="bed" value="double">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Double</span><br><br>

			                <label for="gender">&emsp;&emsp;Furniture Needed?</label>&emsp;
			                <label class="rad">
			                    <input type="radio" name="furniture" value="yes">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Yes</span>&emsp;
			                <label class="rad">
			                    <input type="radio" name="furniture" value="no">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Nofurniture</span><br><br>

					        <div class="subm" style="margin-bottom: 5%;">&emsp;&emsp;&emsp;&emsp;
                        		<input type="submit" class="btn btn-danger cl" id="back" name="back" value="Back">&emsp;&emsp;
                        		<input type="submit" class="btn btn-primary cl" id="next" name="next" value="Next">
                    		</div>
						</form> 
					</div>
				</div>
	        </div>
       	</div>
    </div>
</body>
</html>