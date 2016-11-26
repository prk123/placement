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
$confirm = "Placement Link Posted !";  
mysqli_select_db($con,$database);

$sql="Insert into `company` (`CName`,`Link`,`Arrear`,`CGPA`,`Sector`,`Post`,`Description`)
values
('$_POST[C_name]','$_POST[C_link]','$_POST[Arrears]','$_POST[C_CGPA]','$_POST[C_sector]','$_POST[C_Posting]','$_POST[C_description]')";

echo '<script type="text/javascript">alert("'. $confirm . '")</script>';

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

mysqli_close($con)

?>
<script type="text/javascript">location.href = 'clogin.php';</script> 