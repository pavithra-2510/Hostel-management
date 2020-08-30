<!DOCTYPE html>
<html>
<head>
	<title>Admin Profile</title>
</head>
<body>
<?php
include "includeadmin.php";
?>

		<?php
		$conn = new mysqli("sql212.epizy.com","epiz_26261548","ltM63SCaag","epiz_26261548_hostel");
			$sql = "SELECT * FROM admin ORDER BY Id DESC LIMIT 1";
			$result = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($result))
			{
				$dbemail = $row["Email"];
				$dbpass = $row["Password"];
				$dbname = $row["Username"];
			}
		
		?>	
	    <div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12" id="aa">
					<br>
							<div class="row">
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading" style="font-size:30px;color: #719;"><b>Admin profile details</b></div>
										<label class="col-sm-10 control-label" style="border-bottom: 1px solid #000;"></label>
									<div class="panel-body">
										<form method="post" class="form-horizontal">					
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-4 control-label" style="font-size:25px;color: #258035;font-weight: bold;">Email</label>
												<div class="col-sm-8">
	<input type="email" class="form-control" name="emailid" id="emailid" style="font-family:cursive;font-size:20px;color: #600;" value="<?php echo $dbemail ?>" required="required">
						 						<span class="help-block m-b-none" style="font-size:25;color:red;font-weight: bold;">
													Email can't be changed!</span> 
												</div>
											</div>
									<div class="form-group">
									<label class="col-sm-4 control-label" style="font-size:25px;color: #258035;font-weight: bold;">Username</label>
									<div class="col-sm-8">
	<input type="text" class="form-control" name="uname" style="font-family:cursive;font-size:20px;color: #600;" value="<?php echo $dbname; ?>" required="" >
												</div>
											</div>
												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-warning" type="submit" name="ucancel" style="font-family:all;font-size:20px;font-weight: bold;">Cancel</button>
													<input class="btn btn-primary" type="submit" style="font-family:all;font-size:20px;font-weight: bold;" name="update" value="Update Profile">
												</div>
											</div>
										</form>
									</div>
								</div>
								<?php
									if(isset($_POST["update"]))
									{
										$uname = $_POST["uname"];
										$sql = "UPDATE admin SET Username = '$uname' WHERE Email = '$dbemail'";
										$result = mysqli_query($conn,$sql);
									}
									if(isset($_POST["ucancel"]))
									{
										header("Location:admin.php");
									}
								?>
								<div class="col-md-5">
								<div class="panel panel-default">
									<div class="panel-heading" style="font-size:30px;color: #719;">Change Password</div>
									<label class="col-sm-9 control-label" style="border-bottom: 1px solid #000;"></label>
									<div class="panel-body">
	                                <form method="post" class="form-horizontal" name="changepwd" id="change-pwd">
    										<div class="hr-dashed"></div>
    										<div class="form-group">
												<label class="col-sm-6 control-label" style="font-size:25px;color: #258035;font-weight: bold;">OldPassword </label>
												<div class="col-sm-6">
				<input type="text" style="font-family:cursive;font-size:20px;color: #600;" value="<?php echo $dbpass ?>" name="oldpassword"  class="form-control" required="required">
											</div>
												</div>
											<div class="form-group">
												<label class="col-sm-6 control-label" style="font-size:25px;color: #258035;font-weight: bold;">NewPassword</label>
												<div class="col-sm-6">
	<input type="password" class="form-control" name="newpassword" id="newpassword" style="font-family:cursive;font-size:20px;color: #600;" value="" required="required">
												</div>
											</div>
                                    <div class="form-group">
									<label class="col-sm-6 control-label" style="font-size:25px;color: #258035;font-weight: bold;">ConfirmPassword</label>
									<div class="col-sm-6">
	<input type="password" class="form-control" style="font-family:cursive;font-size:20px;color: #600;" value="" required="required" id="cpassword" name="cpassword" >
												</div>
											</div>
												<div class="col-sm-12 ">
													<button class="btn btn-warning" name="ccancel" type="submit" style="font-family:all;font-size:20px;font-weight: bold;">Cancel</button>
													<input type="submit" name="changepwd" style="font-family:all;font-size:20px;font-weight: bold;" Value="Change Password" class="btn btn-primary">
											</div>
											<?php
												if(isset($_POST["changepwd"]))
												{
													$pass  = $_POST["newpassword"];
													$cpass = $_POST["cpassword"];
													if($pass != $cpass)
													{
														echo "<script>alert('Passwords are not Matching...')</script>";
													}
													else
													{
														$sql = "UPDATE admin SET Password = '$pass' WHERE Email = '$dbemail'";
														$result = mysqli_query($conn,$sql);					
													}
													if(isset($_POST["ccancel"]))
													{
														header("Location:admin.php");
													}
												}
											?>
										</form>
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
	</div>
</center>
</nav>
</div>
</body>
</html>