<!DOCTYPE html>
<html>
<head>
	<title>Vacate Hostel</title>
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
	$logemail = $row["Email_Id"];
}

$sql = "SELECT * FROM residentbook WHERE Resident_EmailId = '$logemail'";
$result = mysqli_query($conn,$sql);
if(!mysqli_num_rows($result))
{
?>
<script>
	alert("Book Your Hostel!");
</script>
<?php
	require "Resident_Hostel.php";
}
else
{
$sql = "SELECT * FROM residentbook WHERE Resident_EmailId = '$logemail'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
	$name = $row["Resident_Name"];
	$regno = $row["Resident_RegisterNumber"];
	$email = $row["Resident_EmailId"];
	$contact = $row["Resident_PhoneNumber"];	
} 
?>
<form method="POST" class="form-horizontal">
	<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
						<br>
								<center>
									<h2 style="color:#000;font-weight: bold;font-family: all;font-size: 50px;color:blue">Vacate Hostel</h2>
								</center>		
												<div class="col-md-12" id="aa">
						<div class="row">
							<div class="col-md-6">
								
														
				             <div class="form-group">
									<label class="col-sm-2 control-label" style="font-size:25px;color: #258035;font-weight: bold;">Username</label>
									<div class="col-sm-12">
	<input type="text" class="form-control" name="name" style="font-family:cursive;font-size:20px;color: #600;" value="<?php echo $name;  ?>" >
												</div>
											</div>	
											<div class="form-group">
												<label class="col-sm-2 control-label" style="font-size:25px;color: #258035;font-weight: bold;">Email</label>
												<div class="col-sm-12">
	<input type="email" class="form-control" name="email" style="font-family:cursive;font-size:20px;color: #600;" value="<?php echo $email; ?>" >
												</div>
											</div>
												
											</div>
								
								<div class="col-md-6">
    										<div class="form-group">
												<label class="col-md-3 control-label" style="font-size:25px;color: #258035;font-weight: bold;">RegisterNumber </label>
												<div class="col-sm-10">
				<input type="number" style="font-family:cursive;font-size:20px;color: #600;" value="<?php echo $regno; ?>" name="regno"  class="form-control">
											</div>
												</div>
											<div class="form-group">
												<label class="col-sm-3 control-label" style="font-size:25px;color: #258035;font-weight: bold;">PhoneNumber</label>
												<div class="col-sm-10">
	<input type="number" class="form-control" name="phone"  style="font-family:cursive;font-size:20px;color: #600;"  value="<?php echo $contact; ?>" >
												</div>
											</div>
										</div>
										<div class="form-group">
									<div class="col-sm-10"><label style="text-align: right;font-size:25px;color: #258035;font-weight: bold;">&nbsp;&nbsp;Reason to Vacate Hostel...</label></div>
									<div class="col-md-11">
										<input type="message" name="reason"  style="font-family:cursive;font-size:20px;color: #600;width:100%;" class="form-control">
									</div>
								</div>
</div>

<div class = "col-md-12">
	<center>
		<input type="submit" name="vacate" style="font-family:all;font-size:20px;font-weight: bold;" Value="Submit" class="btn btn-warning">
</center>
</div>
</body>
</html>
<?php
}

if(isset($_POST["vacate"]))
{
	$email = $_POST["email"];
	$reason = $_POST["reason"];
	$sql = "SELECT * FROM residentvacate WHERE EmailId = '$email'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result))
	{
		echo "<script>alert('Your Request was already sent to admin... ')</script>";	
	}
	else
	{
	$sql = "INSERT INTO residentvacate (EmailId,Reason) VALUES ('$email','$reason')";
	mysqli_query($conn,$sql);
	echo "<script>alert('Your Request Was Sent To Admin... ')</script>";
		}
}

?>		

