
<?php

$con =mysql_connect("localhost","root","myass");

if(!$con)

{

die('could not connect:' . mysql_error());

}


else 

{

 echo "successfuk";

}

mysql_close($con);


?>
