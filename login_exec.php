<?php
	//Start session
	session_start();
	//Include database connection details
	require_once('/connection.php');
	//Array to store validation errors
	$errmsg_arr = array();
	//Validation error flag
	$errflag = false;
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
	//Sanitize the POST values
	$username = $_POST[username];
	$password = $_POST[password];
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login.php");
		exit();
	}
	//Create query
	$qry="SELECT * FROM student WHERE RegNo='$username' AND Password='$password'";
	$result=mysqli_query($con,$qry);
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['RegNo'];
			$_SESSION['SESS_FIRST_NAME'] = $member['Name'];
			$_SESSION['SESS_LAST_NAME'] = $member['Password'];
			session_write_close();
			header("location: sprofile.php");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'The entered combination not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: login.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>