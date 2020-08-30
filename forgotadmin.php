<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.min.js">
	<link rel="stylesheet" href="css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="indexCSS.css">
	<link rel="stylesheet" type="text/css" href="forgotCSS.css">
</head>
<body>
	<div class="sidebar">
		<header>HOSTEL MANGEMENT SYSTEM</header>
		<ul>
			<li><a href="resident.php">Resident Registration</a>
			</li> 
			<li><a href="residentlogin.php">Resident Login</a>
			</li> 
			<li><a href="index.php">Admin Login</a></li>
		</ul>
	</div>
<center>
	<h1>Forgot Password</h1>
	<div class="log">
	<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
		
			<div class="card-body">

	<form name = "f" method="POST">
	<p class="en">Enter Email</p>
   <input type="text" name="email" required="">
   <br><br>
   <center><input type="submit" name="send" class="btn btn-warning" value="Send"></center>
<?php 
if(isset($_POST["send"]))
{
	$email = $_POST["email"];
	$conn = new mysqli("sql212.epizy.com","epiz_26261548","ltM63SCaag","epiz_26261548_hostel");
	$sql = "SELECT Password FROM admin WHERE Email = '$email'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
	while($row=mysqli_fetch_assoc($result))
	{
?>
	<div class="card-footer">
   <h2>Your Password is  </h2>
<?php 
      echo "<div class=\"passs\">".$row["Password"]."</div>";
?>

    <br><center><BUTTON class ="btn btn-primary" name="login"> GOLTO  LOGIN</BUTTON></center>
</form>
</div>
<?php
          }
        }
    
    else
    {
        echo "<script>alert('This mail is not Registered...')</script>";
     
    }
}
?>
</form>
</div>
</div>
</div>
</div>
</div>
</center>

</body>
</html>