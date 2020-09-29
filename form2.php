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
        function passwordValidates( $pass ) {
            return preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $pass);
        }
         
        $emailErr = $passErr = $cpassErr = "";
        if(isset($_POST["submit"]))
        {
            $email = $_POST['email'];
            $pasword = $_POST['password'];
            $confirm = $_POST['cpassword'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = 'Please Enter Proper Email Id!';
            }

            if(!passwordValidates($pasword))
            {
                $passErr='Password format is not correct!';
            }
            if($pasword!=$confirm)
            {
                $cpassErr='Password and confirm password is not correct!';
            }
        }
    ?>
    <div class="row container_form">
        <div class="form_left col-sm-0 col-md-6 col-6">
            <img src="logoImage.svg" width="420px" height="470px">
        </div>
        <div class="form_right col-sm-12 col-md-6 col-6">
            <br/>
            <h2>&emsp;REGISTRATION</h2>
            <form action="connect.php" method="POST">
                <br>
                <label for="em">Email&emsp;</label>
                <input type="text" name="email" id="name" placeholder="Email" autofocus autocomplete="OFF">
                <span class="error">* <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $emailErr;?>
                </span><br>

                <label for="pass">Password&emsp;</label>
                <input type="password" name="password" id="pass" placeholder="Password should be 8characters long" autofocus autocomplete="OFF">
                <span class="error">* <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $passErr;?>
                </span><br>

                <label for="pass">Confirm Password<!-- &emsp; --></label>
                <input type="password" name="cpassword" id="pass" placeholder="Re-enter the above Password" autofocus autocomplete="OFF">
                <span class="error">* <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $cpassErr;?>
                </span><br>
                
                <div class="subm">
                    &emsp;&emsp;&emsp;&emsp;
                    <input type="submit" class="btn btn-danger cl" id="back" name="back" value="Back">&emsp;&emsp;
                    <input type="submit" class="btn btn-primary cl" id="submit" name="submit" value="Submit">
                </div>
            </form> 
        </div>
    </div>
</body>
</html>