
<?php
ob_start();
if(isset($_POST[email]))

{
//   header("Location:/404.html");
$akhil=$_POST[email];
echo "<h1>your email id is</h1>";
echo "<h1>$akhil</h1>";
}


ob_end_flush()
?>
