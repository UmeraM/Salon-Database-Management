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
		<form action="service_details.php" method="post">
			<table border="2" style="background-color:#FFFFFF;">
				<h1> Entry Employee Details</h1>
				<hr>
				<br>
				<tr>
					<td><div align="center"><label>Appointment ID</label></td>
					<td><input type="text" name="APP_ID"></td>
				</tr>
				<tr>
					<td><div align="center"><label>Service ID</label></td>
					<td><input type="text" name="SER_ID"></td>
				</tr> 
				<tr>
					<td><div align="center"><label>Employee ID</label></td>
					<td><input type="text" name="E_ID"></td>
				</tr>
				<tr>
					<td><div align="center"><label>Service Name</label></td>
					<td><input type="text" name="SER_NAME"></td>
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