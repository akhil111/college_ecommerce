<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

include_once 'putin.php';


$query="SELECT * FROM images";

if($result=mysqli_query($conn,$query))
{
	//echo "good to go if";

  while ($row=mysqli_fetch_row($result))
{

  //echo "good to go while";
   echo "<h1>$row[0]</h1>";
   echo "<img src='$row[0]'>";

}
}



?>

</body>
</html>