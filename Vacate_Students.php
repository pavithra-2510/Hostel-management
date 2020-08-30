<!DOCTYPE html>
<html>
<head>
	<title>Vacate Students</title>
</head>
<body>
<?php
include "includeadmin.php";
?>
<center><h2 style="color: darkblue;background-color: white;border:none;">Vacate Students</h2></center>
	<table border="1px" class="contenttable">
		<tbody>
	<tr class="tablehead">	
		<th>S.NO</th>
		<th>Register Number</th>
		<th>Email ID</th>
		<th>Reason</th>
		<th>Detail</th>
		<th>Action</th>
	</tr>
<?php
$conn = new mysqli("localhost","root","","hostel management");
$sql = "SELECT * FROM residentvacate rv,residentdetails rd , resident r WHERE rv.EmailId = rd.EmailId AND rd.EmailId = r.Email_Id";
$result = mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result)>0)
		{
				$i=0;
				while($row = mysqli_fetch_assoc($result))
				{
					$i++;
					$id = $row["VacateId"];		
					$email = $row["EmailId"];
					$reason = $row["Reason"];
					$register = $row["RegisterNumber"];
					                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
				echo "<tr>
						<form method = 'post'>
						<td>{$i}</td>
						<td>{$register}</td>
						<td>{$email}</td>
						<td>{$reason}</td>
						<td><a href='Vacate_Details.php?detail=$id'   class = 'btn btn-primary' style = 'font-size:20px;font-family:all;'>Full Detail</a>
						<td><a href='Vacate_Students.php?vacate=$id'   class = 'btn btn-success' style = 'font-size:22px;font-family:all;'>Vacate</a></td>
						</form>
						";

				
				}
				if(isset($_GET["vacate"]))
				 {
				 	$id = $_GET["vacate"];
				 	$sql = "SELECT * FROM residentvacate WHERE VacateId = '$id'";
				 	$result = mysqli_query($conn,$sql);
				 	while($row = mysqli_fetch_assoc($result))
				 	{
				 		$email = $row["EmailId"];
				 	}
				 	$sql = "DELETE FROM resident WHERE Email_Id = '$email'";
				 	mysqli_query($conn,$sql); 
				 	$sql = "DELETE FROM residentbook WHERE Resident_EmailId = '$email'";
				 	mysqli_query($conn,$sql);
				 	$sql = "DELETE FROM residenthostel WHERE Resident_EmailId = '$email'";
				 	mysqli_query($conn,$sql);
				 	$sql = "DELETE FROM residentdetails WHERE EmailId = '$email'";
				 	mysqli_query($conn,$sql);
				 	$sql = "DELETE FROM residentlogin WHERE Email_Id = '$email'";
				 	mysqli_query($conn,$sql); 
				 	$sql = "DELETE FROM residentvacate WHERE EmailId = '$email'";
				 	mysqli_query($conn,$sql);
					echo "<script>alert('Vacated Successfully!...')</script>";
				}
		}
?>
</body>
</html>