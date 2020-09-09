<html>
<head>
    <title>
        Rent Cafe
    </title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
        $name = $gender = $dob = $phone = $city = "";
        $nameVal = $genderVal = $dobVal = $phoneVal = $cityVal = "";
        $nameErr = $genderErr = $dobErr = $phoneErr = $cityErr = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            print_r($_POST);
            
            if (empty($_POST["name"])) 
            {
                    $nameErr = "Name is required<br>"; 
            } 
            else 
            { 
                $name = $_POST["name"]; 
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                    $nameErr = "Only letters and white space allowed<br>"; 
                } 
            }
            if(empty($_POST["gender"])){
                $genderErr="Gender is required<br>";
            }
            if (empty($_POST["dob"])) 
            {
                    $dobErr = "DOB is required<br>"; 
            } 
            else 
            {  
                $dob = date_diff(date_create($_POST['dob']), date_create('now'))->y; 
                if ($dob<18) {
                    $dobErr = "Age should be more than 18 years<br>"; 
                } 
            }           
            if (empty($_POST["pn"])) 
            {
                    $phoneErr = "Phone No. is required<br>"; 
            } 
            else 
            { 
                $phone = $_POST["pn"]; 
                if (!preg_match("/^[1-9][0-9]{9}$/",$phone)) {
                    $phoneErr = "Only 10 digit numbers allowed<br>"; 
                } 
            }
            if (empty($_POST["city"])) 
            {
                    $cityErr = "City is required<br>"; 
            } 
            else 
            { 
                $city = $_POST["city"]; 
                if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
                    $city = "Only letters and white space allowed<br>"; 
                } 
            }
            
        }
        if(isset($_POST['clear']))
        {
            $nameVal = $genderVal = $dobVal = $phoneVal = $cityVal = "";
            $nameErr = $genderErr = $dobErr = $phoneErr = $cityErr = "";            
        }
        if($nameErr == "" && $genderErr == "" && $dobErr == "" && $phoneErr == "" && $cityErr == "" && isset($_POST['next']))
        {
            header("Location: form2.php");
        }        
    ?>
    <div class="row container_form">
        <div class="form_left col-sm-0 col-md-6 col-6">
            <img src="logoImage.svg" width="420px" height="470px">
        </div>
        <div class="form_right col-sm-12 col-md-6 col-6">
            <br/>
            <h2>&emsp;REGISTRATION</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <br>
                <label for="fn">&emsp;&emsp;Name&emsp;</label>
                <input type="text" name="name" id="name" placeholder="Name" autofocus autocomplete="OFF" value="<?php echo $nameVal ?>" >
                <span class="error">* <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $nameErr;?></span><br>
                <!-- <label for="ln">Email</label>
                <input type="text" name="em" id="ln" placeholder="Email"  autocomplete="OFF">
                <br><br> -->
                <label for="gender">&emsp;&emsp;Gender</label>&emsp;
                <label class="rad">
                    <input type="radio" name="gender" value="male">
                    &emsp;<span class="checkmark"></span>
                </label><span class="rad_label">Male</span>&emsp;
                <label class="rad">
                    <input type="radio" name="gender" value="female">
                    &emsp;<span class="checkmark"></span>
                </label><span class="rad_label">Female</span>
                <!-- <label class="rad">One
                    <input type="radio" checked="checked" name="gender">
                    <span class="checkmark"></span>
                </label> -->
                <span class="error">* <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $genderErr;?></span><br>
                <label for="dob">Date of Birth</label>
                <input type="Date" name="dob" id="dob" autocomplete="OFF" value="<?php echo $dobVal ?>" > 
                <span class="error">* <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $dobErr;?></span><br>
                <label for="pn">&emsp;&emsp;Phone&emsp;</label>
                <input type="text" name="pn" id="pn" placeholder="Phone" autocomplete="OFF" value="<?php echo $phoneVal ?>" >
                <span class="error">* <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $phoneErr;?></span><br>
                <label for="ct">&emsp;&emsp;&emsp;City&emsp;</label>
                <input type="text" name="city" id="city" placeholder="City" autofocus autocomplete="OFF" value="<?php echo $cityVal ?>" >
                <span class="error">* <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $cityErr;?></span><br>
                <div class="subm">
                    &emsp;&emsp;&emsp;&emsp;
                    <input type="submit" class="btn btn-danger cl" id="clear" name="clear" value="Clear">&emsp;&emsp;
                    <input type="submit" class="btn btn-primary cl" id="next" name="next" value="Next">
                </div>
            </form> 
        </div>
    </div>
</body>
</html>