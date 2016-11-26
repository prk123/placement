<?php
	include('connection.php');
	require_once('auth.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5, Code lab, codelab, codelab coming soon template, bootstrap coming soon template">
    <title> PAT Payment </title>
    <!-- ============ Google fonts ============ -->
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet'
        type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800'
        rel='stylesheet' type='text/css' />
    <!-- ============ Add custom CSS here ============ -->
    <link href="Content/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="Content/style.css" rel="stylesheet" type="text/css"/>
    <link href="Content/font-awesome.css" rel="stylesheet" type="text/css" />
	<script src="scripts/jquery.js" type="text/javascript"></script>
    <script src="scripts/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/jquery.backstretch.js" type="text/javascript"></script>
	
</head>
<body>
	
    <div id="custom-bootstrap-menu" class="navbar navbar-default " style="background:#213e81;">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"> VIT - Placement Admin </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
                    <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
			<div class="collapse navbar-collapse navbar-menubuilder">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php">Logout</a> </li>
                </ul>
            </div>
        </div>
    </div>

	<div class="container" >
		<form id="form1" action="post.php" method="POST">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
            <div class="registrationform">
                <div class="form-horizontal">
                    <fieldset>
                        <legend> Post The Placement Offer <i class="fa fa-pencil pull-right"></i></legend>
                        <div class="form-group">
                            <Label ID="Label8"  Text="Reg No." class="col-lg-2 control-label"> Company Name </Label>
                            <div class="col-lg-10">
                                <input ID="PRegNo" name="C_name"  placeholder="company name" class="form-control" required></input>
                            </div>
                        </div>
						<div class="form-group">
                            <Label ID="Label8"  Text="Reg No." class="col-lg-2 control-label"> Registration Link </Label>
                            <div class="col-lg-10">
                                <input ID="PRegNo" name="C_link"  placeholder="Registration Link" class="form-control" required></input>
                            </div>
                        </div>
						<div class="form-group">
                            <Label ID="Label8" class="col-lg-2 control-label"> Eligibility </Label>
                            <div class="col-lg-10">
							<div class="col-lg-10">
							<label class="col-lg-6 control-label"> Standing Arrears </Label><br>
							<div class="col-lg-10">
							<select name="Arrears" class="col-lg-6" style="color:black;">
							<option name="Arrears" value="Yes">YES</option>
							<option name="Arrears" value="No"> No</option>
							</select><br>
							</div>
							</div>
							<br>
							<div class="col-lg-10">
							<Label ID="Label8" class="col-lg-2 control-label"> CGPA </Label>
                            <div class="col-lg-10">
                                <input ID="PRegNo" name="C_CGPA"  placeholder="CGPA Required" class="form-control" required></input>
                            </div>
							</div>
							</div>
							</div>
						<div class="form-group">
                            <Label ID="Label8"  Text="Reg No." class="col-lg-2 control-label"> Company Sector </Label>
                            <div class="col-lg-10">
                                <input ID="PRegNo" name="C_sector"  placeholder="Company Sector" class="form-control" required></input>
                            </div>
                        </div>
						<div class="form-group">
                            <Label ID="Label8"  class="col-lg-2 control-label"> Posting </Label>
                            <div class="col-lg-10">
                                <input ID="PRegNo" name="C_Posting"  placeholder="Postings" class="form-control" required></input>
                            </div>
                        </div>
						<div class="form-group">
                            <Label ID="Label8"  class="col-lg-2 control-label"> Company & Job Description </Label>
                            <div class="col-lg-10">
                                <input name="C_description" class="form-control" required></input>
                            </div>
                        </div>
                           
                        
							
                        
						
                        
                        
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <Button ID="btnSubmit" type="submit"  class="btn btn-primary" onclick="RegisterUser"> Post </Button>
                                <Button ID="btnCancel"  type="cancel" class="btn btn-warning"> Cancel </Button>                              
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
		</form>
		<script type="text/javascript">
        'use strict';

        /* ========================== */
        /* ::::::: Backstrech ::::::: */
        /* ========================== */
        // You may also attach Backstretch to a block-level element
        $.backstretch(
        [

            "img/slider_5.jpg",

        ],

        {
            duration: 4500,
            fade: 1500
        }
    );
    </script>


</body>
</html>