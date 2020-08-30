<!DOCTYPE html>
<html>
<head>
	<title>Room Details</title>
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
$sql = "SELECT * FROM resident WHERE Email_Id = '$logemail'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
	$resno = $row["Registration_Number"];
	$resfname = $row["First_Name"];
	$resmname = $row["Middle_Name"];
	$reslname = $row["Last_Name"];
	$resgender = $row["Gender"];
	$rescontact = $row["Contact_Number"];
	$resemail = $row["Email_Id"];
}
$name = "$resfname $resmname $reslname";
$sql = "SELECT * FROM residentbook WHERE Resident_EmailId = '$logemail'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
	$bookfood = $row["Resident_FoodType"];
	$bookcollege = $row["Resident_College"];
	$bookcourse = $row["Resident_Course"];
	$booksem = $row["Resident_Semester"];

}
$sql = "SELECT * FROM residenthostel WHERE Resident_EmailId = '$logemail'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
	$reshostel = $row["Resident_Hostel"];
	$room = $row["Resident_Room"];
	$fees = $row["Resident_Fees"];
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
$sql = "SELECT * FROM residentdetails WHERE EmailId = '$logemail'";
$result = mysqli_query($conn,$sql);
if(!mysqli_num_rows($result))
{		
		$sql = "INSERT INTO  residentdetails (Name,RegisterNumber,EmailId,ContactNumber,College,Course,Semester,Hostel,Room,FoodType,Fees) VALUES ('$name','$resno','$resemail','$rescontact','$bookcollege','$bookcourse','$booksem','$reshostel','$room','$bookfood','$fees')";
		$result = mysqli_query($conn,$sql);	
}
?>
<form  method="POST" class="form-horizontal" >
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					
						<center>
							<h2 style="color:#000;font-weight: bold;font-family: all;font-size: 50px;color:red">Room Details</h2>
						</center>	
					<br>		  <table class="table table-bordered" style="border: 1px solid black" cellspacing="0" width="100%">
					  	<tbody>
					  	<tr>
					  		<td colspan="6" style="color:blue;border: 1px solid black"><b>Personal Info</b></td>
					  	</tr>
					  	<tr>
					  		<td colspan="1" style="border: 1px solid black"><b>Resident Name : </b><?php echo "$name"; ?> </td>
					  		<td colspan="6" style="border: 1px solid black"><b>Register Number : </b><?php echo "$resno" ?></td>
					  	</tr>
					  	<tr>
					  		<td colspan="1" style="border: 1px solid black"><b>Email ID : </b><?php echo "$resemail"; ?> </td>
					  		<td colspan="6" style="border: 1px solid black"><b>Contact Number : </b><?php echo "$rescontact" ?></td>
					  	</tr>
					  	<tr>
					  		<td colspan="4" style="color:blue;border: 1px solid black"><b>Educational Info</b></td>
					  	</tr>
					  	<tr>
					  		<td style="border: 1px solid black"><b>College: </b><?php echo "$bookcollege"; ?> </td>
					  		<td style="border: 1px solid black"><b>Course : </b><?php echo "$bookcourse" ?></td>
					  		<td style="border: 1px solid black"><b>Semester : </b><?php echo "$booksem" ?></td>
					  	</tr>
					  	<tr>
					  		<td colspan="4" style="color:blue;border: 1px solid black"><b>Hostel Info</b></td>
					  	</tr>
					  	<tr>
					  		<td colspan="1" style="border: 1px solid black"><b>Hostel: </b><?php echo "$reshostel"; ?> </td>
					  		<td colspan="6" style="border: 1px solid black"><b>Room : </b><?php echo "$room" ?></td>
					  	</tr>
					  	<tr>
					  		<td colspan="1" style="border: 1px solid black"><b>Food Type : </b><?php echo "$bookfood" ?></td>
					  		<td colspan="6" style="border: 1px solid black"><b>Fees(Per Semester) : </b><?php echo "$fees" ?></td>
					  	</tr>
					  </tbody>
					  </table>
					  
				</div>
			</div>
		</div>
	</div>
</form>
</div>
</div>
<?php
}
?>
</body>
</html>