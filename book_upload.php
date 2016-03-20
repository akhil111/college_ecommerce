
<?php


include_once 'putin.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
<style>

/*body{
	background-image: linear-gradient(45deg,#0a1855 0%,#da0024 100%);
}*/

div
{
	border:2px solid black;
width: 550px;
height: 400px;
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

button
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

button:hover
{
	 color: #4db538;
	 background-color: #FFFFFF;
	 border-color: #4db538;
	 border: 2px solid #4db538;
}



</style>

<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script> -->

</head>
<body style="background-color: #7E8F7C;">

<center>
<div>


<form id="book_upload_form">

<input type="text" name="book_name" placeholder="enter book name"><br>
<input type="text" name="book_price" placeholder="enter book price"><br>
<input type="text" name="book_branch" placeholder="book branch"><br>
<input type="file" style="padding: 15px; margin-top: 30px;"><br>
<button type="button">submit</button>

</form>
</div>

</center>
</body>
</html>