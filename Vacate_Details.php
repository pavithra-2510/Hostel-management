<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
	<link rel="stylesheet" type="text/css" href="vacateCSS.css">
</head>
<body>
<?php
include "includeadmin.php";
?>
<?php
if(isset($_GET["detail"]))
{
	$id = $_GET["detail"];
}
$conn = new mysqli("localhost","root","","hostel management");
$sql = "SELECT * FROM  residentvacate rv,residentdetails rd , resident r WHERE VacateId = '$id' AND rv.EmailId = rd.EmailId AND rd.EmailId = r.Email_Id ";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
					$id = $row["VacateId"];
					$email = $row["EmailId"];
					$id = $row["VacateId"];
					$name = $row["Name"];
					$register = $row["RegisterNumber"];
					$email = $row["EmailId"];
					$contact = $row["ContactNumber"];
					$college = $row["College"];
				 	$course = $row["Course"];
				 	$sem = $row["Semester"];
				 	$hostel = $row["Hostel"];
				 	$room = $row["Room"];
				 	$food = $row["FoodType"];
				 	$fees = $row["Fees"];
} 
?>
<br>
<center><h1>Student Details</h1></center>
<div class="log">
<form action="post">
		<div class = "frm">Name</div><input type="text" id="frm" class="form-control" name="name" style="margin:-52px 0 0 250px;" value="<?php echo $name; ?>">
		<div class = "frm">Contact Number</div><input type="number" style="margin:-52px 0 0 250px;" id="frm" class="form-control" name="contact" value="<?php echo $contact; ?>">
		<div class = "frm">Course</div><input type="text" class="form-control" id="frm" style="margin:-52px 0 0 250px;" name="course" value="<?php echo $course; ?>">
		<div class = "frm">Semester</div><input type="number" class="form-control" id="frm" name="sem" style="margin:-52px 0 0 250px;" value="<?php echo $sem; ?>">
		<div class = "frm">Room Number</div><input type="number" class="form-control" id="frm" name="room" style="margin:-52px 0 0 250px;" value="<?php echo $room; ?>">
		<div class = "frm">Hostel</div><input type="hostel" class="form-control" id="frm" name="hostel" style="margin:-52px 0 0 250px;" value="<?php echo $hostel; ?>">
		<div class = "frm">Fees (Per Semester)</div><input type="number" id="frm" class="form-control"  style="margin:-52px 0 0 250px;" name="fees" value="<?php echo $fees; ?>">
</form>

</div>
</body>
</html>