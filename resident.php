<?php
include "includeheader.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Resident Registration</title>
</head>
<body>
<div class="register">
<font size=5  face="Times new roman">
 <form name="f" action="ResDB.php"   method="POST" >
Registation No<input type="number" class="form-control" id="frm" name="regno" required="">  	
First Name<input type="text" class="form-control" id="frm"    name="fname" required="" >
Middle Name<input type="text" class="form-control" id="frm"   name="mname" required="" >
Last Name<input type="text" class="form-control"  id="frm"  name="lname" required="" >
Gender<select name="gender" class="form-control" id="frm"  required="required">
<option value="">Select Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
</select>
Contact No<input type="number" id="frm"  class="form-control" name="phone" required="" >
Email Id<input type="email" id="frm"  class="form-control" name="email" required="">
Create password<input type="password" id="frm"  class="form-control" name="pass" value="" required="" >
Confirm password<input type="password" id="frm"  class="form-control" name="cpass" value="" required="" >
<br>
<h2 align="center"><input type="submit" class="btn btn-primary" style="font-size: 25px;font-weight: bold;"  value="Register" name="register"></h2>
</form>
</font>
</div>
</body>
</head>
