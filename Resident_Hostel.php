<!DOCTYPE html>
<html>
<head>
	<title>Book Hostel</title>
</head>
<body>
<?php
include "includeresident.php";
?>

<center>
	<h2 style="color:#000;font-weight: bold;font-family: all;font-size: 50px;color:blue">Hostel Details</h2>
</center>	

		<?php
			$conn = new mysqli("sql212.epizy.com","epiz_26261548","ltM63SCaag","epiz_26261548_hostel");
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
				$dbemail = $row["Email_Id"];
				$dbreg = $row["Registration_Number"];
				$dbname = $row["First_Name"];
				$dbphone = $row["Contact_Number"];
			}

				$sql = "SELECT * FROM resident WHERE Email_Id = '$logemail'";
					$result = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($result))
					{
						$resfname = $row["First_Name"];
						$resmname = $row["Middle_Name"];
						$reslname = $row["Last_Name"];
						$resgender = $row["Gender"];
					}
			$namee = "$resfname $resmname $reslname";
			if(isset($_POST["cancel"])) 
		    {
		        header("Location:Resident_Dashboard.php"); 
		    }
			if(isset($_POST["book"]))
			 {
				$name = $_POST["name"];
				$email = $_POST["email"];
				$regno = $_POST["regno"];
				$phone = $_POST["phone"];
				$food = $_POST["food"];
				$college = $_POST["college"];
				$course = $_POST["course"];
				$sem = $_POST["sem"];
				$sql = "SELECT * FROM residentbook WHERE Resident_EmailId = '$email'";
				$result = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result))
				{
					$bookemail = $row["Resident_EmailId"];
					$bookname = $row["Resident_Name"];
					$bookregno = $row["Resident_RegisterNumber"];
					$bookphone = $row["Resident_PhoneNumber"];
					$bookfood = $row["Resident_FoodType"];
					$boookcollege = $row["Resident_College"];
					$bookcourse = $row["Resident_Course"];
					$booksem = $row["Resident_Semester"];
				}

				$sql = "SELECT * FROM residentbook WHERE Resident_EmailId = '$email'";
				$result = mysqli_query($conn,$sql);
				if(!mysqli_num_rows($result))
				{
					$sql = "INSERT INTO residentbook (Resident_Name,Resident_RegisterNumber,Resident_EmailId,Resident_PhoneNumber,Resident_FoodType,Resident_College,Resident_Course,Resident_Semester) VALUES ('$name','$regno','$email','$phone','$food','Anna University','$course','$sem')";
					$result = mysqli_query($conn,$sql);
					echo "<script>alert('Your Details Are Added!!!')</script>";
					
				}
				else
				{
				if($name === $bookname && $regno === $bookregno && $email === $bookemail && $phone === $bookphone && $food === $bookfood && $course === $bookcourse && $college === $boookcollege && $sem === $booksem)
				{
					echo "<script>alert('Your Details Are Already Added!!')</script>";
				}
				else
				{
					$sql = "UPDATE residentbook SET Resident_FoodType = '$food',Resident_Semester = '$sem' WHERE Resident_EmailId = '$email'";
					$result = mysqli_query($conn,$sql);
					echo "<script>alert('Updated Successfully!!!')</script>";
				}  
				}
				$sql = "SELECT * FROM resident WHERE Email_Id = '$email'";
					$result = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($result))
					{
						$resfname = $row["First_Name"];
						$resmname = $row["Middle_Name"];
						$reslname = $row["Last_Name"];
						$resgender = $row["Gender"];
					}
					
					if($resgender == "male")
						{
							$boys =     array("Kurunchi","Thazham","Marudham","Magizham","Sembaruthi");
							$reshostel = $boys[array_rand($boys)];
							$room = rand(1,25);
							$sql = "SELECT * FROM residentbook WHERE Resident_EmailId = '$email'";
							$result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_assoc($result))
							{
							$bookfood = $row["Resident_FoodType"];
							}
							if($bookfood=="veg")
							{
								$fees = "22000";
							}
							else
							{
								$fees = "26000";
							}
						}
						if($resgender == "female")
						{
							$girls = array("Nandhiya","Roja","Malligai","Thamarai","Mullai");
							$reshostel = $girls[array_rand($girls)];
							$room = rand(1,25);
							$sql = "SELECT * FROM residentbook WHERE Resident_EmailId = '$email'";
							$result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_assoc($result))
							{
							$bookfood = $row["Resident_FoodType"];
							}
							if($bookfood=="veg")
							{
								$fees = "20000";
							}
							else
							{
								$fees = "24000";
							}
						}
						
						$sql = "SELECT * FROM residenthostel WHERE Resident_EmailId = '$logemail'";
						$result = mysqli_query($conn,$sql);
						if(!mysqli_num_rows($result))
						{
							$sql = "INSERT INTO residenthostel (Resident_EmailId,Resident_Hostel,Resident_Room,Resident_Fees) VALUES ('$logemail','$reshostel','$room','$fees')";
							$result = mysqli_query($conn,$sql);
						}

			}
		
		?>	
		<form method="POST" class="form-horizontal">
	<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12" id="aa">
						
						<div class="row">
							<div class="col-md-6">
															
											
											<div class="form-group">
									<label class="col-sm-2 control-label" style="font-size:25px;color: #258035;font-weight: bold;">Username</label>
									<div class="col-sm-12">
	<input type="text" class="form-control" name="name" style="font-family:cursive;font-size:20px;color: #600;" value="<?php echo $namee;  ?>" >
												</div>
											</div>	
											<div class="form-group">
												<label class="col-sm-2 control-label" style="font-size:25px;color: #258035;font-weight: bold;">Email</label>
												<div class="col-sm-12">
	<input type="email" class="form-control" name="email" style="font-family:cursive;font-size:20px;color: #600;" value="<?php echo $dbemail; ?>" >
												</div>
											</div>
												
											</div>
								
								<div class="col-md-6">
    										<div class="form-group">
												<label class="col-md-3 control-label" style="font-size:25px;color: #258035;font-weight: bold;">RegisterNumber </label>
												<div class="col-sm-10">
				<input type="number" style="font-family:cursive;font-size:20px;color: #600;" value="<?php echo $dbreg; ?>" name="regno"  class="form-control">
											</div>
												</div>
											<div class="form-group">
												<label class="col-sm-3 control-label" style="font-size:25px;color: #258035;font-weight: bold;">PhoneNumber</label>
												<div class="col-sm-10">
	<input type="number" class="form-control" name="phone"  style="font-family:cursive;font-size:20px;color: #600;"        value="<?php echo $dbphone; ?>" >
												</div>
											</div>
										</div>
</div>
								<div class="col-md-24" style="text-align: left;">
							
						<form method="post" class="form-horizontal">					
											
											<div class="form-group">
									<div class="col-sm-3">
									<label  style="font-size:25px;color: #258035;font-weight: bold;">FoodType</label></div>
									<div class="col-md-11">
	<input type="radio" name="food" value="Veg" style="font-family:cursive;font-size:20px;color: #600;"><label style="font-family:cursive;font-size:20px;color: #600;" >&nbsp;Veg</label>
	<input type="radio" name="food" value="Nonveg" style="font-family:cursive;font-size:20px;color: #600;"><label style="font-family:cursive;font-size:20px;color: #600;"> &nbsp;Nonveg</label>
												
											</div>
						</div>
						<div class="form-group">
									<div class="col-sm-3"><label style="text-align: right;font-size:25px;color: #258035;font-weight: bold;">College</label></div>
									<div class="col-md-11">
										<input type="text" name="college" style="font-family:cursive;font-size:20px;color: #600;" class="form-control" value="Anna University">
									</div>
								</div>
	
						<div class="form-group">
									<div class="col-sm-3"><label  style="font-size:25px;color: #258035;font-weight: bold;">Course</label>
									</div>
			<div class="col-md-11">
										<input type="text" name="course" style="font-family:cursive;font-size:20px;color: #600;" class="form-control">
									</div>
								</div>
						<div class="form-group">
								<div class="col-sm-3"><label  style="font-size:25px;color: #258035;font-weight: bold;">Semester</label>
									</div><div class="col-md-11">
	
	<select  class="form-control" name="sem" style="font-family:cursive;font-size:20px;color: #600;">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
	</select>
												
											</div>
						</div>
										
					</div>

				</div>

			</div>

		</div>

	</div>

<div class = "col-md-12">
	<center>
	<button class="btn btn-warning" name="cancel" type="submit" style="font-family:all;font-size:20px;font-weight: bold;">Cancel</button>
	<input type="submit" name="book" style="font-family:all;font-size:20px;font-weight: bold;" Value="Submit" class="btn btn-primary">
</center>
</div>
</form>
</body>
</html>