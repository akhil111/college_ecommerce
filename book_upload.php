
<?php

require_once 'putin.php';


$file=$_FILES['file'];
$email=$_POST['email'];
$map=$file['name'];

$book_query="INSERT INTO sample VALUES('$email','$file')";

if($conn->query($book_query)==TRUE)
  {
        echo "sucks";
}


//echo $email;
echo $file;
echo $map;

?>