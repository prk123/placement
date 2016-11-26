<?php
$user   = "Hack";
$password ="MGVh5MAs9fHaxQcK";
$database = "dbms";
$host   = "localhost";
$con = mysqli_connect($host,$user,$password,$database);
if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }
mysqli_select_db($con,$database);
$bid = rand();
$done = "Your Reciept number is $bid";


$sql="INSERT INTO `student` (`RegNo`,`PAT`)

VALUES

('$_POST[PRegNo]','$bid')";

echo '<script type="text/javascript">alert("'. $done . '")</script>';
 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

mysqli_close($con)

?>
<script type="text/javascript">location.href = 'login.php';</script> 