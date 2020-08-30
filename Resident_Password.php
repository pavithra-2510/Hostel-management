<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
<?php
include "includeresident.php";
?>
		<?php
			$conn = new mysqli("localhost","root","","hostel management");
			$sql = "SELECT * FROM residentlogin ORDER BY Id DESC LIMIT 1";
			$result = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($result))
			{
				$dbemail =$row["Email_Id"];
			}
			$sql = "SELECT Password FROM resident WHERE Email_Id = '$dbemail'";
			$result = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($result))
			{
				$dbpass =$row["Password"];
			}

		
		?>	
<div class="content-wrapper">
			<div class="container-fluid" >

				<div class="row" >
					<div class="col-md-12">
					<br>
					<div  style="background-color: violet;border:1px solid black">
						<h2 class="page-title" style="font-size:40px;color: red;font-weight: bold;font-family: all;border-bottom: 1px solid black">Change Password </h2>
						<div class="row">
	
								<div class="col-md-7" >
								<div class="panel panel-default"  style="background-color: violet;margin: 0 0 0 20px;border:1px solid black;">
									
									<div class="panel-body">
				<form method="post" class="form-horizontal" name="changepwd" id="change-pwd" onSubmit="return valid();">
    											
											<div class="form-group">
												<label class="col-sm-4 control-label" style="font-size:25px;color: #258035;font-weight: bold;">Old Password </label>
												<div class="col-sm-8">
				<input type="text" style="font-family:cursive;font-size:20px;color: #600;" value="<?php echo $dbpass ?>" name="oldpassword"  class="form-control" required="required">
											 
											</div>
										</div>
											<div class="form-group">
												<label class="col-sm-4 control-label" style="font-size:25px;color: #258035;font-weight: bold;">New Password</label>
												<div class="col-sm-8">
											<input type="password" class="form-control" name="newpassword" style="font-family:cursive;font-size:20px;color: #600;" id="newpassword" value="" required="required">
												</div>
											</div>
                                    <div class="form-group">
									<label class="col-sm-4 control-label" style="font-size:25px;color: #258035;font-weight: bold;">ConfirmPassword</label>
									<div class="col-sm-8">
				<input type="password" class="form-control" value="" required="required" id="cpassword" style="font-family:cursive;font-size:20px;color: #600;" name="cpassword" >
												</div>
											</div>
											<br>
												<div  class = "col-sm-offset-2">
													<div class="col-sm-3">
													<button class="btn btn-warning" type="submit" style="font-family:all;font-size:20px;font-weight: bold;">Cancel</button>
												</div>
												<div class="col-sm-4">
													<input type="submit" name="changepwd" Value="Change Password" style="font-family:all;font-size:20px;font-weight: bold;" class="btn btn-primary">
											</div>
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
														$sql = "UPDATE resident SET Password = '$pass',Confirm_Password = '$cpass' WHERE Email_Id = '$dbemail'";
														$result = mysqli_query($conn,$sql);	
														header("Location:Resident_Password.php");				
													}
													if(isset($_POST["ccancel"]))
													{
														header("Location:residentHome.php");
													}
												}
											?>
										</form>
									</div>
								</div>
							<br><br>
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