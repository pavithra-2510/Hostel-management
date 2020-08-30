<?php
$regno = $_POST["regno"];
$fname = $_POST["fname"];
$mname = $_POST["mname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$contact = $_POST["phone"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$cpass = $_POST["cpass"];

if($pass!=$cpass)
{

	echo "<script>alert('Password not Matching')</script>";
	 require "resident.php";
}
else
{

$conn = new mysqli("sql212.epizy.com","epiz_26261548","ltM63SCaag","epiz_26261548_hostel");

if($conn->connect_error)
{
	echo 'Connection error...'.$conn->connect_error;
}
else
{
  $sql="SELECT Email_Id FROM resident WHERE Email_Id='$email'";
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
    echo "<script>alert('Someone Already Register Using this Email..')</script>";
    require "resident.php";
  }
  else
  {
  $sql="INSERT INTO resident (Registration_Number,First_Name,Middle_Name,Last_Name,Gender,Contact_Number,Email_Id,Password,Confirm_Password) VALUES('$regno','$fname','$mname','$lname','$gender','$contact','$email','$pass','$cpass')";
  $res = mysqli_query($conn,$sql);
  header("Location:residentLogin.php");
  }
 
}
}
?>