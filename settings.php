<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	include('connection.php');
	require_once('auth.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5, Code lab, codelab, codelab coming soon template, bootstrap coming soon template">
    <title> Home </title>
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet'
        type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800'
        rel='stylesheet' type='text/css' />
    <link href="Content/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="Content/style.css" rel="stylesheet" type="text/css"/>
    <link href="Content/font-awesome.css" rel="stylesheet" type="text/css" />
</head>
<body>

    <div id="custom-bootstrap-menu" class="navbar navbar-default" style="background:#213e81;">
        <div class="container">
            <div class="navbar-header" >
                <a class="navbar-brand" href="#"> VIT Placements </a>
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
<!--User Profile Sidebar-->
<div class="container" >
    <div class="row profile" >
		<div class="col-md-3" >
			<div class="profile-sidebar" >
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="simg/1.jpg" class="img-circle" alt="Cinque Terre" width="104" height="104">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $_SESSION['SESS_FIRST_NAME']; ?>
					</div>
					<div class="profile-usertitle-job">
						<?php echo $_SESSION['SESS_MEMBER_ID']; ?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="sprofile.php">
							<i class="glyphicon glyphicon-home"></i>
							Dashboard </a>
						</li>
						<li>
							<a href="profile.php">
							<i class="glyphicon glyphicon-user"></i>
							Profile </a>
						</li>
						<li>
							<a href="settings.php">
							<i class="glyphicon glyphicon-cog"></i>
							Settings </a>
						</li>
						
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   <div class="container" >
		<form id="form1" action="set.php" method="POST">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
            <div class="registrationform" style="background:#213e81;">
                <div class="form-horizontal">
				<?php
					$result = mysqli_query($con,"SELECT * FROM student where RegNo = '$_SESSION[SESS_MEMBER_ID]'");
					$row = mysqli_fetch_assoc( $result );
				?>
                    <fieldset>
                        <legend> Edit Your Information <i class="fa fa-pencil pull-right"></i></legend>
                        
                        <div class="form-group">
                            <Label ID="Label7"  Text="Contact" class="col-lg-2 control-label"> Contact </Label>
                            <div class="col-lg-10">
                                <input name="RContact"  placeholder="Contact" class="form-control" value="<?php echo "{$row['Contact']}" ?>"></input>
                            </div>
                        </div>
						<div class="form-group">
                            <Label ID="Label7"  Text="Contact" class="col-lg-2 control-label"> D.O.B </Label>
                            <div class="col-lg-10">
                                <input size="16" type="date" name="dob" style="color:black;"  value="<?php echo "{$row['DOB']}" ?>">
    
                            </div>
                        </div>
                        <div class="form-group">
                            <Label ID="Label1"  Text="Email" class="col-lg-2 control-label"> Email </Label>
                            <div class="col-lg-10">
                                <input name="REmail"  placeholder="Email" class="form-control" type = "email" value="<?php echo "{$row['Email']}" ?>"></input>
                            </div>
                        </div>
						<div class="form-group">
                            <Label ID="Label7"  Text="CGPA" class="col-lg-2 control-label"> CGPA </Label>
                            <div class="col-lg-10">
                                <input name="RCGPA"  placeholder="CGPA" class="form-control"  value="<?php echo "{$row['CGPA']}" ?>"></input>
                            </div>
                        </div>
						<div class="form-group">
                            <Label ID="Label7"  Text="10%" class="col-lg-2 control-label"> 10% </Label>
                            <div class="col-lg-10">
                                <input name="tenth"  placeholder="10%" class="form-control" type="number"  value="<?php echo "{$row['Tenth']}" ?>"></input>
                            </div>
                        </div>
						<div class="form-group">
                            <Label ID="Label7"  Text="12%" class="col-lg-2 control-label"> 12% </Label>
                            <div class="col-lg-10">
                                <input name="twelth"  placeholder="12%" class="form-control" type="number" value="<?php echo "{$row['Twelth']}" ?>"></input>
                            </div>
                        </div>
						<div class="form-group">
                            <Label ID="Label7"  Text="Board" class="col-lg-2 control-label"> Board </Label>
                            <div class="col-lg-10">
                                <input name="board"  placeholder="Board" class="form-control"  value="<?php echo "{$row['Board']}" ?>"></input>
                            </div>
                        </div>
						<div class="form-group">
                            <Label ID="Label7"  Text="Branch" class="col-lg-2 control-label"> Branch </Label>
                            <div class="col-lg-10">
                                <input name="Branch"  placeholder="Branch" class="form-control"  value="<?php echo "{$row['Branch']}" ?>"></input>
                            </div>
                        </div>
						<div class="form-group">
                            <Label ID="Label7"  Text="VRank" class="col-lg-2 control-label"> VITEEE Rank </Label>
                            <div class="col-lg-10">
                                <input name="VRank"  placeholder="VITEEE Rank" class="form-control" type="number" value="<?php echo "{$row['VRank']}" ?>"></input>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <Label ID="Label3"  Text="Address" class="col-lg-2 control-label"> Address </Label>
                            <div class="col-lg-10">
                                <textarea name="RAddress" class="form-control" rows="5" id="comment" style="color:black;"> </textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <Button ID="btnSubmit" type="submit"  class="btn btn-primary" onclick="RegisterUser"> Update </Button>
                                <Button ID="btnCancel"  type="cancel" class="btn btn-warning"> Cancel </Button>                              
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
		</form>
            </div>
		</div>
	</div>
</div>

<br>
<br>
<script src="scripts/jquery.js" type="text/javascript"></script>
    <script src="scripts/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/jquery.backstretch.js" type="text/javascript"></script>
    
</body>
</html>
