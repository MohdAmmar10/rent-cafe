<?php
    $pid=$_GET["id"];
    $uemail=$_GET["uemail"];
    $owneremail=$_GET["owneremail"];
    $server = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "rent_cafe";
    $db = new mysqli($server, $username, $pass, $dbname);
    $conn = mysqli_connect($server, $username, $pass, $dbname);

    $conn = mysqli_connect($server, $username, $pass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query="insert into notify(owneremail,uemail,pid) values(?,?,?)";
    $pst=mysqli_prepare($conn,$query);
    mysqli_stmt_bind_param($pst,"ssi",$owneremail,$uemail,$pid);
			mysqli_stmt_execute($pst);
            header("Location: contact.php?id=$pid");
	

?>