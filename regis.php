<?php
 
    
 $con= mysqli_connect("localhost","root","","event");
    if($_POST['submit1']){
       if(!empty($_POST['username']) && !empty($_POST['first-name']) && !empty($_POST['last-name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['Event']) && !empty($_POST['Food']) && !empty($_POST['Drinks']) && !empty($_POST['atendees']) && !empty($_POST['date']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['state']))
          {
                $username = $_POST['username'];  
                $fname = $_POST['first-name'];  
                $lname = $_POST['last-name']; 
                $mob = $_POST['phone']; 
                $email = $_POST['email']; 
                $event = $_POST['Event']; 
                $food = $_POST['Food']; 
                $drinks = $_POST['Drinks']; 
                $noOfPeople = $_POST['atendees']; 
                $date = $_POST['date']; 
                $address = $_POST['address']; 
                $city = $_POST['city']; 
                $state = $_POST['state'];

                $query1="INSERT INTO event VALUES ('$username','$fname','$lname',$mob,'$email','$event','$food','$drinks',$noOfPeople,$date,'$address','$city','$state')";
                $run= mysqli_query ( $con , $query1 )  or die (mysqli_error($con));

                if($run){
                    echo " Form submitted successfully";
                }
                else{
                    echo "form not submitted";
                }
    
         }
    else{
        echo "all fields are required!!";
    }
}
?>
