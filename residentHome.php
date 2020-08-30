<!DOCTYPE html>
<html>
<head>
	<title>Resident Home</title>
</head>
<body>
<?php
include "includeresident.php";
?>
<?php
$conn = new mysqli("localhost","root","","hostel management");
$sql = "SELECT Email_Id FROM residentlogin ORDER BY Id DESC LIMIT 1";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
	$logmail = $row["Email_Id"];
}
$sql = "SELECT * FROM resident WHERE Email_Id = '$logmail'";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
	$resno = $row["Registration_Number"];
	$resfname = $row["First_Name"];
	$resmname = $row["Middle_Name"];
	$reslname = $row["Last_Name"];
	$resgender = $row["Gender"];
	$rescontact = $row["Contact_Number"];
	$resemail = $row["Email_Id"];
	$respass = $row["Password"];
	$rescpass = $row["Confirm_Password"];
}
?>
<center>
	<h2 style="color:#000;font-weight: bold;font-family: all;font-size: 40px;color:blue">Resident Registration</h2>
</center>

<div class="group" style="margin: 0 0 0 -100px;">
<font size=5  face="Times new roman">
 <form name="f"  method="POST" >
Registation No<input type="number" class="form-control" id="frm" name="regno" style="font-size:20px;" value="<?php echo $resno; ?>">  	
<span style="color:red;font-size: 20px;">Register Number Cannot Be Changed!!!</span><br>
First Name<input type="text" class="form-control"  id="frm" name="fname" style="font-size:20px;" value="<?php echo $resfname; ?>">
Middle Name<input type="text" class="form-control" id="frm"   name="mname" style="font-size:20px;" value="<?php echo $resmname; ?>">
Last Name<input type="text" class="form-control" id="frm"  name="lname" style="font-size:20px;" value="<?php echo $reslname; ?>">
Gender<select name="gender" class="form-control" id="frm" style="font-size:20px;" value="<?php echo $resgender; ?>">
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select>
Contact No<input type="number" class="form-control" id="frm" name="contact" style="font-size:20px;" value="<?php echo $rescontact; ?>" >
Email Id<input type="email" class="form-control" id="frm" name="email" style="font-size:20px;" value="<?php echo $resemail; ?>">
<span style="color:red;font-size: 20px;">EmailId Cannot Be Changed!!!</span><br>
Password<input type="text" class="form-control" id="frm" style="font-size:20px;" name="pass" value="<?php echo $respass; ?>" >
<span style="color:red;font-size: 20px;">Password Cannot Be Changed!!!</span><br>
<h2 align="center"><input type="submit" class="btn btn-success"  value="Update Profile" name="update"></h2>
</form>
</font>
</div>
<?php
if(isset($_POST["update"]))
{
	$regno = $_POST["regno"];
	$fname = $_POST["fname"];
	$mname = $_POST["mname"];
	$lname = $_POST["lname"];
	$gender = $_POST["gender"];
	$contact = $_POST["contact"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	$cpass = $_POST["cpass"];
		$sql = "UPDATE resident SET First_Name = '$fname',Middle_Name = '$mname',Last_Name = '$lname',Gender = '$gender',Contact_Number = '$contact' WHERE Email_Id = '$email'  ";
		$result = mysqli_query($conn,$sql);
		//echo "<script>alert('Profile Updated Sucessfully!!!')</script>";
		header("location:residentHome.php");

}
?>
</body>
</html>