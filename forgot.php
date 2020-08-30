<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<?php
require "includeheader.php";
?>
<center>
	<div class="log">
	<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
		
			<div class="card-body">

	<form name = "f" method="POST">
	<p class="en" style="color: white;font-size:23px;">Enter Email</p>
   <input type="text" class="form-control" style="width:300px;" name="email">
   <br>
   <center><input type="submit" style="font-size: 25px;" name="send" class="btn btn-warning" value="Send"></center>
<?php 
if(isset($_POST["send"]))
{
	$email = $_POST["email"];
		$conn = new mysqli("sql212.epizy.com","epiz_26261548","ltM63SCaag","epiz_26261548_hostel");
	$sql = "SELECT Password FROM resident WHERE Email_Id = '$email'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
	while($row=mysqli_fetch_assoc($result))
	{
?>
	<div class="card-footer">
   <h2 style="color: white;">Your Password is  </h2>
<?php 
      echo "<div class=\"passs\" style=\"color: white;font-size:23px;\">".$row["Password"]."</div>";
?>

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