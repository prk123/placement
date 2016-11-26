<?php
$user   = "Hack";
$password ="MGVh5MAs9fHaxQcK";
$database = "dbms";
$host   = "localhost";
$con = mysqli_connect($host,$user,$password,$database);
if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }
$confirm = "You have been successfuly registered !";  
mysqli_select_db($con,$database);

$sql="UPDATE `student` SET Name = '$_POST[RName]' ,Contact = '$_POST[RContact]',Email = '$_POST[REmail]',Password = '$_POST[RPassword]' ,Address = '$_POST[RAddress]',Sex = '$_POST[RGender]'

WHERE PAT = '$_POST[RReciept]'";



if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }
else{
echo '<script type="text/javascript">alert("'. $confirm . '")</script>';
}
mysqli_close($con)

?>
<script type="text/javascript">location.href = 'login.php';</script> 