<!DOCTYPE html>
<html>
	<head>
		<title>Entry Customer Details </title>
        <style>
         body{
                background-image: url(images/1486213969B1.jpg) ,url(images/download.png ) ;
                background-repeat: no-repeat;
                background-size: 1500px 900px;
                background-blend-mode:lighten;    
                opacity: 1;
            }
        </style>
	</head>
	<body>
		<div align="center">
		<form action="customer_detail.php" method="post">
			<table border="2" style="background-color:#FFFFFF;">
				<h1> Entry Customer Details</h1>
				<hr>
				<br>
				<tr>
					<td><div align="center"><label>Customer ID</label></td>
					<td><input type="text" name="C_ID"></td>
				</tr>
				<tr>
					<td><div align="center"><label>First Name</label></td>
					<td><input type="text" name="C_FNAME"></td>
				</tr> 
				<tr>
					<td><div align="center"><label>Last Name</label></td>
					<td><input type="text" name="C_LNAME"></td>
				</tr>
				<tr>
					<td><div align="center"><label>Gender</label></td>
					<td><input type="text" name="C_GENDER"></td>
				</tr>
                <tr>
					<td><div align="center"><label>DOB</label></td>
					<td><input type="text" name="C_DOB">YYYY-MM-DD</td>
				</tr>
				<tr>
					<td><div align="center"><label>Address</label></td>
					<td><input type="text" name="C_ADDRESS"></td>
				</tr>
				<tr>
					<td><div align="center"><label>Pincode</label></td>
					<td><input type="text" name="C_PINCODE"></td>
				</tr>
				<tr>
					<td><div align="center"><label>Phone Number</label></td>
					<td><input type="text" name="C_PHONE"></td>
				</tr>
                <tr>
					<td><div align="center"><label>E-mail</label></td>
					<td><input type="text" name="C_EMAIL"></td>
				</tr>
				<tr>
					<td colspan="2">
					<div align="center">
					<input type="Submit" name="save" value="Submit"> <input type="reset" name="Reset" value="Reset"> <input type="Button" name="back" value="Cancel">
					</div>
					</td>
				</tr>
				</div>	
			</table>
		</form>
		<br>
		<br>
		<hr>
		</div>
	</body>
</html>