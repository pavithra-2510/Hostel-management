<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<div>
<?php
include "includeadmin.php";
?>
</div>
<table border="1px" class="contenttable">
	<tbody>
<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<tr><h2 class="page-title" style="margin-top:4%;font-size: 40px;font-family: all;font-weight: bold;color:#600;">Dashboard</h2></tr>
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<tr><div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
													<?php
													$conn = new mysqli("sql212.epizy.com","epiz_26261548","ltM63SCaag","epiz_26261548_hostel");
													$sql = "SELECT * FROM residentdetails";
													$result = mysqli_query($conn,$sql);
													$count = 0;
													while(mysqli_fetch_assoc($result))
													{
														$count++;
													}
													?>
													<div class="stat-panel-number h1 "><?php echo $count ?></div>
													<div class="stat-panel-title text-uppercase"> Students</div>
												</div>
											</div>
											<a href="Manage_Students.php" class="block-anchor panel-footer">Full Detail ---></a>
										</tr></div>
									</div>
									<tr><div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<?php
												$conn = new mysqli("sql212.epizy.com","epiz_26261548","ltM63SCaag","epiz_26261548_hostel");
													$sql = "SELECT * FROM residentdetails";
													$result = mysqli_query($conn,$sql);
													$count = 0;
													while(mysqli_fetch_assoc($result))
													{
														$count++;
													}
													?>
													<div class="stat-panel-number h1 "><?php echo $count ?></div>
													<div class="stat-panel-title text-uppercase"> Rooms </div>
												</div>
											</div>
											<a href="Manage_Rooms.php" class="block-anchor panel-footer text-center">See All ---></a></tr>
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
