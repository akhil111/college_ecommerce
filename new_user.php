<?php


//include 'functions.php';
include_once 'putin.php';

//if(isset($_POST['submitted']))
//{

       $new_email=$_POST['email'];
       $new_password=$_POST['password'];
   

//}

//echo "bang bang<br>";

//echo $signup_email;
//echo $signup_password;

//$sql = "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('John', 'Doe', 'john@example.com')";

//$signup_sql="INSERT INTO user_details(user_email,user_password,user_images) VALUES('$new_email','$new_password','$new_image')";


$signup_sql="INSERT INTO user_details(user_email,user_password) VALUES('$new_email','$new_password')";
//$sql="INSERT INTO user_details(user_email,user_password) VALUES('snapchat@gmail.com','asshole')";

if($conn->query($signup_sql)==TRUE)
  {
         redirect('home.php');
}

	  

  else
       {
	     echo "not successful";
       }




?>