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
?>