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

<div class="container">
    <div class="row profile">

		<div class="col-md-3">
			<div class="profile-sidebar" style="width:100%;height:200%;">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="simg/1.jpg" class="img-circle"  style="align:centre;" alt="Cinque Terre" width="104" height="104">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $_SESSION['SESS_FIRST_NAME'];?>
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
			   			<?php
			$result = mysqli_query($con,"SELECT * FROM company");
      ?>
	  <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" style= "width:100%;" >
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<thead>
        <tr>
          <th>Company Name</th>
          <th>Link</th>
          <th>Standing Arrears</th>
          <th>Required CGPA</th>
          <th>Sector</th>
          <th>Eligible Branches</th>
		  <th>Description</th>
        </tr>
      </thead>
      <tbody>
      
            <tr>
              <td>{$row['CName']}</td>
              <td>{$row['Link']}</td>
              <td>{$row['Arrear']}</td>
              <td>{$row['CGPA']}</td>
              <td>{$row['Sector']}</td>
              <td>{$row['Post']}</td>
			  <td>{$row['Description']}</td>

			 <br>
			 \n";
          }
        ?>
      </tbody>
    </table>


            </div>
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
