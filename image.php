<html>
<body>

<?php
//echo "fuck you";

include_once 'putin.php';

$ol=$_POST['email'];
$la=$_POST['password'];
$file=$_FILES['file'];
$akhil=$_FILES['file']['name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);


if($conn)
{
	echo "connection okay" . "<br>";
	
}



if(is_dir($target_dir))
{
	echo "directory exists<br>";
	if(move_uploaded_file($akhil, "uploads/"))
	{
		echo "image upload sucessful";

	}

	  else
	  {
	  	echo "image upload sucks";
	  }
}

else
{
    echo "directory does not  exists<br>";
}



echo $ol . "<br>";
echo $la . "<br>";
echo  $_FILES["file"]["name"]. "<br>";
echo $file['size'] . "<br>";
echo $target_file . "<br>";


$base_name=basename($target_file);
echo "<h1>$base_name</h1>";

$query ="INSERT INTO images(image) VALUES('$target_file')";


if($conn->query($query)==TRUE)
{
	echo "picture upload successful";
}


else {
	echo "picture upload not sucessful";
}


echo "<img src='uploads/git_commands1.png'>";

?>

</body>
</html>
