<!DOCTYPE html>
<html>
<head>
	<title>Manage Rooms</title>
</head>
<body>
<?php
include "includeadmin.php";
?>
	<center><h2 style="color: darkblue;background-color: white;border:none;">Room Details</h2></center>
	<table border="1px" class="contenttable">
		<tbody>
	<tr class="tablehead">	
		<th>S.NO</th>
		<th>Name</th>
		<th>Register Number</th>
		<th>Room Number</th>
		<th>Hostel</th>
		<th>Fees (Per Semester)</th>
	</tr>
	<div class="tablecontent">
		<?php
		$conn = new mysqli("sql212.epizy.com","epiz_26261548","ltM63SCaag","epiz_26261548_hostel");
		$sql = "SELECT * FROM residentdetails";
		$result = mysqli_query($conn,$sql);
		if ($result->num_rows>0)
	    {
			$i = 0;
			while ($row = mysqli_fetch_assoc($result))
			 {
				$i++;
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

				echo "<tr>
						<td>{$i}</td>
						<td>{$name}</td>
						<td>{$register}</td>
						<td>{$room}</td>
						<td>{$hostel}</td>
						<td>{$fees}</td>
						";
			}
		}
	?>

</div>
</body>
</html>