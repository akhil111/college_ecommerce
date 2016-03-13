<?php

  require_once 'putin.php';
 // require_once  'functions.php';

 $old_email=$_POST['email'];
 $old_password=$_POST['password'];

//echo "kremlin<br>";
//echo $old_email;

if((empty($old_password) || empty($old_email)))
{
	echo "details are empty";
	redirect('signin.html');
}




$login_sql="SELECT user_email,user_password FROM  user_details WHERE user_email='$old_email' AND user_password='$old_password' LIMIT 1";
$query=mysqli_query($conn,$login_sql);
//$query=conn->query(login_sql)

if($query)
{
       $row=mysqli_fetch_row($query);
	   $dbname=$row[0];
	   $dbpassword=$row[1];
}

if($dbname==$old_email && $dbpassword==$old_password)
{
	redirect('home.php');
}

else
{
	echo "<html><head>";
	echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">';

	echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>';

	echo '<div class="alert alert-danger" role="alert">invalid user</div>';
	echo "</head></html>";

}

/*$akhil=mysql_num_rows($login_sql);
echo $akhil;*/

/*if($conn->query($login_sql)>0)  

{
	echo "you are valid user";
}

else
{
	echo "you are not a valid user";
}

*/


?>