<?php
include "includeheader.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Resident Login</title>
</head>
<body>
<br>
<div class="log">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
		
			<div class="card-body">
				<form  method="POST">
					<div class="inp">
						
						<input type="email" name="email" class="form-control" placeholder="Email">
						
					</div>
					<div class="inp">
					<br>
						<input type="password" name = "password" class="form-control" placeholder="password">
					</div>
					<br>
					<div class="row align-items-center remember">
						<input type="checkbox" style="font-size: 16px;">Remember Me
					</div>
					<div class="form-group">
						<center><h2><input type="submit" name="submit" value="Login" style="font-family: all;font-weight: bold;" class="btn btn-primary"></h2></center>
					</div>
			
		</div>
			<div>
				<div>
					<div class="wh">
						<br>
					<center style="font-size: 23px;">Don't have an account? <input type="submit" name="register" value="Register Here" style="font-size: 20px;" class = "btn btn-warning"></center>
				</div>
				<br>
				<div class="d-flex justify-content-center">
					<input type="submit" name="forgot" value="Forgot Password?" style="font-size: 20px;" class="btn btn-danger">
				</div>
			</div>
		</div>
	</div>
</div>

</form>
</div>
</div>
</div>
</div>
</div>
<?php
if(isset($_POST["register"]))
{
	header("Location:resident.php");
}
if(isset($_POST["forgot"]))
{
	header("Location:forgot.php");
}
if(isset($_POST["submit"]))
{
	$email = $_POST["email"];
	$pass = $_POST["password"];
	$conn = new mysqli("localhost","root","","hostel management");
	$sql = "SELECT * FROM resident WHERE Email_Id = '$email'";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
		$dbreg = $row["Registration_Number"];
		$dbemail = $row["Email_Id"];
		$dbpass = $row["Password"];
	}
	if(mysqli_num_rows($result)>0)
	{
	if($dbemail!=$email)
	{
		echo "<script>alert('This EmailId is not Registered!!!')</script>";
	}
	else
	{
		if($dbpass!=$pass)
		{
			echo "<script>alert('Password Wrong!!!')</script>";
		}
		else
		{
			$sql = "INSERT INTO residentlogin (Registration_Number,Email_Id,Password) VALUES ('$dbreg','$email','$pass')";
			$result = mysqli_query($conn,$sql);
			header("Location:Resident_Dashboard.php");
		}
	}
	}
	else
	{
		echo "<script>alert('You Are Not Registered!!!')</script>";
	}
}

?>
</center>
</body>
</html>
