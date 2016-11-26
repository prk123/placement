<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5, Code lab, codelab, codelab coming soon template, bootstrap coming soon template">
    <title>VIT Placements</title>
    <!-- ============ Google fonts ============ -->
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet'
        type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800'
        rel='stylesheet' type='text/css' />
    <!-- ============ Add custom CSS here ============ -->
    <link href="Content/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="Content/style.css" rel="stylesheet" type="text/css"/>
    <link href="Content/font-awesome.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="custom-bootstrap-menu" class="navbar navbar-default " style="background:#213e81;">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"> VIT - Placement Portal </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
                    <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-menubuilder">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php">Home</a> </li>
                    <li><a href="payment.php">Payment</a> </li>
                    <li><a href="/about-us">About Us</a> </li>
                    <li><a href="/contact">Contact Us</a> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
		<form id="form1" action="reg.php" method="POST">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="registrationform">
                <div class="form-horizontal">
                    <fieldset>
                        <legend>Register For Placements <i class="fa fa-pencil pull-right"></i></legend>
                        <div class="form-group">
                            <Label ID="Label6"  Text="Name" class="col-lg-2 control-label"> Name </Label>
                            <div class="col-lg-10">
                                <input name="RName"  placeholder="Name" class="form-control" Required></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <Label ID="Label7"  Text="Contact" class="col-lg-2 control-label"> Contact </Label>
                            <div class="col-lg-10">
                                <input name="RContact"  placeholder="Contact" class="form-control" Required></input>
                            </div>
                        </div>
						<!--RegNo Tha -->
                        <div class="form-group">
                            <Label ID="Label1"  Text="Email" class="col-lg-2 control-label"> Email </Label>
                            <div class="col-lg-10">
                                <input name="REmail"  placeholder="Email" class="form-control" type = "email" Required></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <Label ID="Label2"  Text="Password" class="col-lg-2 control-label"> Password </Label>
                            <div class="col-lg-10">
                                <input name="RPassword"  placeholder="Password" class="form-control"
                                    type ="Password" Required></input>
                       
                            </div>
                        </div>
                        <div class="form-group">
                            <Label ID="Label3"  Text="Address" class="col-lg-2 control-label"> Address </Label>
                            <div class="col-lg-10">
                                <textarea name="RAddress" class="form-control" rows="5" id="comment" style="color:black;"> </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <Label ID="Label4"  Text="Gender" class="col-lg-2 control-label"> Gender </Label>
                            <div class="col-lg-10">
                                <div class="radio" name="Gender" Required>
                                    <label><input type="radio" name="RGender" value = "M"> M </label>
									<label><input type="radio" name="RGender" value = "F"> F </label>
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <Label ID="Label8"  Text="Reciept No." class="col-lg-2 control-label"> Reciept No. </Label>
                            <div class="col-lg-10">
                                <input ID="RRegNo" name="RReciept" placeholder="Reciept No." class="form-control" Required></input>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <Button ID="btnSubmit" type="submit"  class="btn btn-primary" onclick="RegisterUser"> Submit </Button>
                                <Button ID="btnCancel"  type="cancel" class="btn btn-warning"> Cancel </Button>                              
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
		</form>
        <!-- Login Page Starts -->
		<form id="form2" action="login_exec.php" method="POST">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="loginForm">
                <div class="form-horizontal">
                    <fieldset>
                        <legend> Login <i class="glyphicon glyphicon-user pull-right"></i></legend>
						<tr>
						<td colspan="2">
						<!--the code bellow is used to display the message of the input validation-->
							<?php
								if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
								echo '<ul class="err">';
								foreach($_SESSION['ERRMSG_ARR'] as $msg) {
									//echo '<li>',$msg,'</li>';
									  echo '<script type="text/javascript">alert("'. $msg . '")</script>';
								}
								echo '</ul>';
								unset($_SESSION['ERRMSG_ARR']);
								}
							?>
						</td>
						</tr>
                        <div class="form-group">
                            <Label ID="Label11"  Text="Reg No." class="col-lg-2 control-label"> Reg No. </Label>
                            <div class="col-lg-10">
                                <input ID="username"  placeholder="Reg No." class="form-control" name="username" required></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <Label ID="Label13" class="col-lg-2 control-label" required> Password </Label>
                            <div class="col-lg-10">
                                <input ID="RPassword"  placeholder="Password" class="form-control"
                                    type ="Password" name="password"></input>
                                <div class="checkbox">
                                    <label>
                                        <CheckBox ID="CheckBox2"  Text="Remember Me" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <Button ID="Button1"  class="btn btn-primary" Text="Login" > Login </Button>
                                <Button ID="Button2"  class="btn btn-warning" Text="Cancel"> Cancel </Button>                              
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
		</form>
		<!-- Admin Login Pages Starts -->
		<form id="form3" action="Elogin_exec.php" method="POST">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="loginForm">
                <div class="form-horizontal">
                    <fieldset>
                        <legend> Admin Login <i class="glyphicon glyphicon-user pull-right"></i></legend>
                        <div class="form-group">
                            <Label ID="Label11"  class="col-lg-2 control-label"> Emp ID </Label>
                            <div class="col-lg-10">
                                <input ID="input9"  placeholder="EMP ID" class="form-control" name="EID"></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <Label ID="Label13" class="col-lg-2 control-label"> Password </Label>
                            <div class="col-lg-10">
                                <input ID="RPassword"  placeholder="Password" class="form-control"
                                    type ="Password" name="Epassword"></input>
                                <div class="checkbox">
                                    <label>
                                        <CheckBox ID="CheckBox2"  Text="Remember Me" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <Button ID="Button1"  class="btn btn-primary" Text="Login" > Login </Button>
                                <Button ID="Button2"  class="btn btn-warning" Text="Cancel"> Cancel </Button>                              
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
		</form>
    </div>
	</div>
	
	<!-- ===================================================================================================================== -->


<!-- ===================================================================================================================== -->
    <script src="scripts/jquery.js" type="text/javascript"></script>
    <script src="scripts/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/jquery.backstretch.js" type="text/javascript"></script>
    <script type="text/javascript">
        'use strict';

        /* ========================== */
        /* ::::::: Backstrech ::::::: */
        /* ========================== */
        // You may also attach Backstretch to a block-level element
        $.backstretch(
        [
            "img/slider_1.jpg",
            "img/slider_2.JPG",
            "img/slider_3.jpg",
            "img/slider_4.png",
            "img/slider_5.jpg",
            "img/slider_6.jpg"
        ],

        {
            duration: 4500,
            fade: 1500
        }
    );
    </script>

</body>
</html>
