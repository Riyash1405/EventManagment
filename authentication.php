<?php      
     
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      $con= new mysqli("localhost","root","","login");
        if($con->connect_error){
            die("Failed to connect: ".$con->connect_error);
        }
        else{
            $stmt=$con->prepare("select * from users where username= ?");
            $stmt->bind_param("s",$username);
            $stmt->execute();
            $stmt_result=$stmt->get_result();
            if($stmt_result->num_rows>0){
                $data=$stmt_result->fetch_assoc();
                if($data['password']=== $password){
                    header('Location:loggedIn.html');
                }
                else{
                    echo "<h2>Invalid username or password</h2>";
                }
            }
        }
          
      //  if($count >0){  
       //     echo "<h1><center> Login successful </center></h1>";  
       // }  
       // else{  
       //     echo "<h1> Login failed. Invalid username or password.</h1>";  
       // }     
?>  
