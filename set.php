<?php
$user   = "Hack";
$password ="MGVh5MAs9fHaxQcK";
$database = "dbms";
$host   = "localhost";
$con = mysqli_connect($host,$user,$password,$database);
include('auth.php');
if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }
$confirm = "You information has been successfully updated !";
mysqli_select_db($con,$database);

$sql="UPDATE `student` SET Contact = '$_POST[RContact]',DOB = '$_POST[dob]',Email = '$_POST[REmail]',CGPA = '$_POST[RCGPA]' ,Tenth = '$_POST[tenth]',Twelth = '$_POST[twelth]',Board = '$_POST[board]',Branch = '$_POST[Branch]',VRank = '$_POST[VRank]',Address = '$_POST[RAddress]'
WHERE RegNo ='$_SESSION[SESS_MEMBER_ID]'";
echo '<script type="text/javascript">alert("'. $confirm . '")</script>';

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

mysqli_close($con)

?>
<script type="text/javascript">location.href = 'settings.php';</script> 