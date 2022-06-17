<!DOCTYPE html>
<html>
	<head>
		<title>Enter Appoitnment Details </title>
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
		<form action="appointment_details.php" method="post">
			<table border="2" style="background-color:#FFFFFF;">
				<h1> Entry Appoitnment Details</h1>
				<hr>
				<br>
				<tr>
					<td><div align="center"><label>Application ID</label></td>
					<td><input type="text" name="APP_ID"></td>
				</tr>
				<tr>
					<td><div align="center"><label>Employee ID</label></td>
					<td><input type="text" name="E_ID"></td>
				</tr> 
                <tr>
					<td><div align="center"><label>Appoitnment Date</label>
					<td><input type="text" name="APP_DATE">YYYY-MM-DD</td>
				</tr>
				<tr>
					<td><div align="center"><label>Appoitnment Time</label></td>
					<td><select name="APP_TIME">
 
                        <option value="08">08</option>
 
                        <option value="09">09</option>
 
                        <option value="10">10</option>
 
                        <option value="11">11</option>
                        
                        <option value="08">12</option>
 
                        <option value="09">13</option>
 
                        <option value="10">14</option>
 
                        <option value="11">15</option>
                        
                        <option value="08">16</option>
 
                        <option value="09">17</option>
 
                        <option value="10">18</option>
                        
                </select></td>
				</tr>
				<tr>
					<td><div align="center"><label>Service Name</label></td>
					<td><select name="APP_TIME">
 
                        <option value="08">Hair cut</option>
 
                        <option value="09">HAIR COLOURING</option>
 
                        <option value="10">HAIR STRAIGHTENING</option>
                        
                        <option value="10">FACIAL-SILVER</option>
 
                        <option value="11">FACIAL-GOLD</option>
                        
                        <option value="08">FACIAL-PLATINUM</option>
 
                        <option value="09">THREADING</option>
 
                        <option value="10">WAXING</option>
 
                        <option value="11">PEDICURE</option>
                        
                        <option value="08">SAREE DRAPE</option>
 
                        <option value="09">MAKEUP & STYLING</option>
 
                        <option value="10">MANICURE</option>
                        
                        <option value="10">EYE REJUVINATION</option>
                        
                </select></td>
				</tr>
				<tr>
					<td><div align="center"><label>AC ID</label></td>
					<td><input type="text" name="AC_ID"></td>
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