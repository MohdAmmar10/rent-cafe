<!DOCTYPE html>
<html>
<head>
	<title>
      Rent Cafe | Login
	</title>
	<link rel="stylesheet" href="form2.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php
    $email =$emailErr = $passowrd= $passErr= $uppercase= $lowercase= $number= "";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      if (empty($_POST["email"])) 
      {
        $emailErr = "Email is required";
      } 
      else 
      {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }

      if(empty($_POST["pass"])) 
      {
        $passErr= "Password is required";
      }
      else
      {
        $password = ($_POST['pass']);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);

        if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) 
        {
        $passErr="Password should be of 8 letters and contain uppercase and numbers";
        }
      }
      if($emailErr == "" && $passErr == "" && isset($_POST['clear']))
      {
          setcookie('EMAIL',$_POST['email'],time()+ 3600);
          setcookie('PASSWORD',$_POST['pass'],time()+ 3600);
          header("Location: home.php");
      } 
    }
    function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

	?>
<div class="row container_form">
        <div class="form_left col-sm-0 col-md-6 col-6">
            <img src="logoImage.svg" width="420px" height="470px">
        </div>
        <div class="form_right col-sm-12 col-md-6 col-6">
        <h2>LOGIN</h2><br>	
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="email">Email&emsp;&emsp;</label>
        <input type="text" name="email" placeholder="Enter Email" autocomplete="OFF">
        <span class="error">*<br><?php 
        if($_SERVER["REQUEST_METHOD"]=="POST"){ 
        echo $emailErr;}?></span>
        <br>
        <label for="pass">Password </label>
        <input type="password" id="pass" name="pass" placeholder="Enter Password" autocomplete="OFF">
        <span class="error">*<br><?php if($_SERVER["REQUEST_METHOD"]=="POST"){ echo $passErr;}?></span>
        <br>
        <p align="right"><a href="#" style="color:#4F66D0;">Forget Password?</a></p>
        
        <div class="subm">
        	<input type="submit" id="clear" name="clear" value="LOGIN" class="btn btn-primary cl">
        </div> 
        </form>	
        </div>	
</body>
</html>