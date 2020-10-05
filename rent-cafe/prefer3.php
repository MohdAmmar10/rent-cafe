<!DOCTYPE html>
<html>
<head>
	<title>Preference Form</title>
	<link rel="stylesheet" href="prefer3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
		if(isset($_POST['back']))
        {
            header("Location: prefer2.php");
		}
		if(isset($_POST['next']))
		{
			header("Location: home.php");
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
                    <div class="col-md-6">
                        <img src="asset/p1.jpg" width="auto" height="auto" class="d-none d-md-block px-3">
                    </div>
                </div>
            </div>
	        <div class="form_right col-12 col-md-6 justify-content-center" style="margin-left: 0px; margin-bottom: 10%;"><br>
	           	<div class="col-md-6">
	                <div class="card text-center" id="formbg" style="background-color: rgba(253,210,0,0.26);  width:30rem; border-radius: 20px !important;">
						<h3 style="margin-top: 10%; margin-bottom: 5%;">Preference with roommate</h3>
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
							<label for="gender">&emsp;&emsp;Food:</label>&emsp;
			                <label class="rad">
			                    <input type="radio" name="food" value="veg">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Veg</span>&emsp;
			                <label class="rad">
			                    <input type="radio" name="food" value="non-veg">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Non-Veg</span><br><br>

			                <label for="gender">&emsp;&emsp;Smoking:</label>&emsp;
			                <label class="rad">
			                    <input type="radio" name="smoke" value="ns">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Non-Smoker</span>&emsp;
			                <label class="rad">
			                    <input type="radio" name="smoke" value="s">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Smoker</span><br><br>

			                <label for="gender">&emsp;&emsp;Drinking:</label>&emsp;
			                <label class="rad">
			                    <input type="radio" name="drink" value="nd">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Non-Drinker</span>&emsp;
			                <label class="rad">
			                    <input type="radio" name="drink" value="d">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Drinker</span><br><br>

			                <label for="gender">&emsp;&emsp;Cleaniness:</label>&emsp;
			                <label class="rad">
			                    <input type="radio" name="clean" value="clean">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Clean</span>&emsp;
			                <label class="rad">
			                    <input type="radio" name="clean" value="avg">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Average</span><br><br>

			                <label for="gender">&emsp;&emsp;Staying up late night:</label>&emsp;
			                <label class="rad">
			                    <input type="radio" name="late" value="sometimes">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Doesnt matter</span>&emsp;
			                <label class="rad">
			                    <input type="radio" name="late" value="often">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">No</span><br><br>

			                <label for="gender">&emsp;&emsp;Are you okay with pets?</label>&emsp;
			                <label class="rad">
			                    <input type="radio" name="night" value="sometimes">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Yes</span>&emsp;
			                <label class="rad">
			                    <input type="radio" name="night" value="often">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">No</span><br><br>

			                <label for="gender">&emsp;&emsp;Type of person:</label>&emsp;
			                <label class="rad">
			                    <input type="radio" name="nature" value="introvert">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Introvert</span>&emsp;
			                <label class="rad">
			                    <input type="radio" name="nature" value="Extrovert">&emsp;<span class="checkmark"></span>
			                </label><span class="rad_label">Extrovert</span><br><br>


					        <div class="subm" style="margin-bottom: 5%;">&emsp;&emsp;&emsp;&emsp;
                        		<input type="submit" class="btn btn-danger cl" id="back" name="back" value="Back">&emsp;&emsp;
		                        <input type="submit" class="btn btn-primary cl" id="next" name="next" value="Submit">
		                    </div>
						</form> 
					</div>
				</div>
	        </div>
       	</div>
    </div>
</body>
</html>