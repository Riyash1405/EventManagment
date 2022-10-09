<?php

	$servername = "localhost";
	$username = "root";
	$password = "";

	$database = "login";

	// Create a connection
	$conn = mysqli_connect($servername,$username, $password, $database);

    if($_POST['register'])
    {
     $username= $_POST['username'];
     $pwd= $_POST['password'];
     $cpwd=$_POST['cpassword'];
   
    $query= "INSERT INTO users VALUES ('$username','$pwd','$cpwd')";
   $data=mysqli_query($conn,$query);
   
   if($data)
   {
     echo "data inserted into database";
   }
   else{
     echo "failed";
   }
   
   }
   
