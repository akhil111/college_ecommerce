<?php


include_once 'putin.php';
include_once 'functions.php';
if($conn)
{
	echo 'connection is successful';
}
?>




<!DOCTYPE html>
<html>
<head>
	<title></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

<style>

.alert
{
	width:340px;
	height: 60px;
	position: absolute;
	top: 10px;
	left: 950px;
}

div
{
	border:2px solid black;
width: 560px;
height: 450px;
background-color: #DFE2DB
;
border-color: white;
margin-top: 90px;
border-radius: 20px;

}

#book_upload_form
{
	color: #FFFFFF;
	}

form input[type=text], form input[type=email], form input[type=password]
{
	    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 18px;
    padding: .5em;
    vertical-align: middle;
    width: 50%;
    outline: 0;
    transition: .5s all;
    text-align: center;
    margin-top: 30px;
    font-family: 'Libre Baskerville', serif;
}

input[type="submit"]
{
	background-color: #4db538;
	width:52%;
	margin-top: 30px;
	 font-family: 'Libre Baskerville', serif;
	 height: 40px;
	 color: white;
	 font-size: 17px;
	  border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"]:hover
{
	 color: #4db538;
	 background-color: #FFFFFF;
	 border-color: #4db538;
	 border: 2px solid #4db538;
}



</style>
</head>


<body style="background-color:white;">
<center>
<div>
<form action="book_upload.php" method="post" enctype="multipart/form-data">

<input type="text" name="book_name" placeholder="enter book name"><br>
<input type="text" name="book_price" placeholder="enter book price"><br>
<input type="text" name="book_branch" placeholder="book branch"><br>
<input type="file" name="book_image" style="padding: 15px; margin-top: 30px;"><br>
<!-- <button type="button">submit</button> -->

<input type="submit" name="submit"/>
</form>
</div>

</center>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>



<?php

if(isset($_POST['submit']))

{
	
	$book_name=$_POST['book_name'];
		$book_pr=$_POST['book_price'];
			$book_branch=$_POST['book_branch'];
			
			$akhil=$_FILES['book_image']['name'];


$query="INSERT INTO book_details VALUES('$book_name','$book_pr','$book_branch','$akhil')";

if($conn->query($query)==TRUE)

{


echo '
 
<div class="alert alert-success">upload super successful.</div>


';

}

else
{
	/*echo "<h1>book upload not  successful</h1>";*/
	  echo '<div class="alert alert-danger">upload not successful.</div>';
}

}

echo $_SERVER['REMOTE_ADDR'];

?>



