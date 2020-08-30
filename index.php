
<?php
include "includeheader.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
<center>

<br>
<br>	
<div class="log">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
		
			<div class="card-body">
				<form method="POST">
					<h2 style="color:white;font-family: all;font-size: 50px;font-weight: bold;"><center >Admin</center></h2>
					<div class="inp">
						
						<input type="email" name="email" class="form-control" placeholder="EmailId">
						
					</div>
					<br>
					<div class="inp">
						<input type="password" name = "password" class="form-control" placeholder="Password">
					</div>
					<br>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<h2><input type="submit" name="submit" style="font-family: all;font-weight: bold;" value="Login" class="btn btn-primary"></h2>
					</div>
				
			</div>
			
		</div>
	</div>
</div>
</form>
<?php
if(isset($_POST["submit"]))
{
	$email = $_POST["email"];
	$pass = $_POST["password"];
	$conn = new mysqli("sql212.epizy.com","epiz_26261548","ltM63SCaag","epiz_26261548_hostel");
	$sql = "INSERT INTO admin (Email,Password) VALUES ('$email','$pass')";
	$result = mysqli_query($conn,$sql);
	header("Location:Admin_Dashboard.php");
}
?>
 </center>
</div>
</body>
</html>