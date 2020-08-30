<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.min.js">
	<link rel="stylesheet" href="css/fontawesome.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
	<script type="text/javascript" src="js/validation.min.js"></script>
	<script type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="adminCSS.css">
	
</head>
<body>
	<center>
	<h1>Admin Profile</h1>
</center>
		<div class="brand clearfix">
		<a href="#" class="logo" style="font-size:18px;font-color:violet;">Hostel Management System</a>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="images.jpeg" class="ts-avatar hidden-side" alt=""> Account</a>
				<ul>
					<li><a href="admin.php">My Account</a></li>
					<li><a href="index.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	    </div>
		<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">	
				<li><a href="Dashboard.php">Dashboard</a></li>
					<li><a href="#">Hostels</a>
					<ul>
						<li><a href="Boys.php">Boys</a></li>
						<li><a href="Girls.php">Girls</a></li>
					</ul>
				</li>
					<li><a href="#">Rooms</a>
					<ul>
						<li><a href="Create_Room.php">Add a Room</a></li>
						<li><a href="Manage_Rooms.php">Manage Rooms</a></li>
					</ul>
				</li>
				<li><a href="Student_Registration.php">Student Registration</a></li>
				<li><a href="Manage_Students.php">Manage Students</a></li>
				<li><a href="Access_Log.php">User Access logs</a></li>
</ul>
</nav>
<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title" style="margin-top:4%;font-size: 40px;font-family: all;font-weight: bold;color:#600;">Dashboard</h2>
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
													<?php
													$conn = new mysqli("localhost","root","","hostel management");
													$sql = "SELECT * FROM resident ";
													?>
													<div class="stat-panel-number h1 "></div>
													<div class="stat-panel-title text-uppercase"> Students</div>
												</div>
											</div>
											<a href="manage-students.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												
													<div class="stat-panel-number h1 ">5</div>
													<div class="stat-panel-title text-uppercase">Total Rooms </div>
												</div>
											</div>
											<a href="manage-rooms.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
												
													<div class="stat-panel-number h1 ">7</div>
													<div class="stat-panel-title text-uppercase">Total Courses</div>
												</div>
											</div>
											<a href="manage-courses.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									
								</div>
							</div>
						</div>

					
						
						

					</div>
				</div>

			</div>
		</div>
	</div>
</body>
</html>
