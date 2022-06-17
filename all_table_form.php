<!DOCTYPE html>
<html>
	<head>
		<title>Entry Details </title>
	</head>
	<body background="ev.jpg">
		<div align="center">
		<form action="all_table_details.php" method="post">
			<table border="2" style="background-color:#FFFFFF;">
				<h1> Entry Details</h1>
				<hr>
				<br>
				<tr>
                    <td><div align="center"><label>Employer ID</label></div></td>
					<td><input type="text" name="E_ID"></td>
				</tr>
				<tr>
                    <td><div align="center"><label>First Name</label></div></div></td>
					<td><input type="text" name="E_FNAME"></td>
				</tr> 
				<tr>
					<td><div align="center"><label>Last Name</label></div></td>
					<td><input type="text" name="E_LNAME"></td>
				</tr>
				<tr>
					<td><div align="center"><label>Gender</label></div></td>
					<td><input type="text" name="E_GENDER"></td>
				</tr>
                <tr>
					<td><div align="center"><label>DOB</label></div></td>
					<td><input type="text" name="E_DOB">YYYY-MM-DD</td>
				</tr>
				<tr>
					<td><div align="center"><label>Address</label></div></td>
					<td><input type="text" name="E_ADDRESS"></td>
				</tr>
				<tr>
					<td><div align="center"><label>Pincode</label></div></td>
					<td><input type="text" name="E_PINCODE"></td>
				</tr>
				<tr>
					<td><div align="center"><label>Phone Number</label></div></td>
					<td><input type="text" name="E_PHONE"></td>
				</tr>
                <tr>
					<td><div align="center"><label>E-mail</label></div></td>
					<td><input type="text" name="E_EMAIL"></td>
				</tr>
				<tr>
                <tr>
					<td><div align="center"><label>Salary</label></div></td>
					<td><input type="text" name="E_SALARY"></td>
				</tr>
                <tr>
					<td><div align="center"><label>Customer ID</label></div></td>
					<td><input type="text" name="C_ID"></td>
				</tr>
				<tr>
					<td><div align="center"><label>First Name</label></div></td>
					<td><input type="text" name="C_FNAME"></td>
				</tr> 
				<tr>
					<td><div align="center"><label>Last Name</label></div></td>
					<td><input type="text" name="C_LNAME"></td>
				</tr>
				<tr>
					<td><div align="center"><label>Gender</label></div></td>
					<td><input type="text" name="C_GENDER"></td>
				</tr>
                <tr>
					<td><div align="center"><label>DOB</label></div></td>
					<td><input type="text" name="C_DOB">YYYY-MM-DD</td>
				</tr>
				<tr>
					<td><div align="center"><label>Address</label></div></td>
					<td><input type="text" name="C_ADDRESS"></td>
				</tr>
				<tr>
					<td><div align="center"><label>Pincode</label></div></td>
					<td><input type="text" name="C_PINCODE"></td>
				</tr>
				<tr>
					<td><div align="center"><label>Phone Number</label></div></td>
					<td><input type="text" name="C_PHONE"></td>
				</tr>
                <tr>
					<td><div align="center"><label>E-mail</label></div></td>
					<td><input type="text" name="C_EMAIL"></td>
				</tr>
                <tr>
                    <td><div align="center"><label>Application ID</label></div></td>
					<td><input type="text" name="APP_ID"></td>
				</tr>
                <tr>
					<td><div align="center"><label>Appoitnment Date</label>
					<td><input type="text" name="APP_DATE">YYYY-MM-DD</td>
				</tr>
                <tr>
					<td><div align="center"><label>Appoitnment Time</label></div></td>
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
					<td><div align="center"><label>Service Name</label></div></td>
					<td><input type="text" name="SER_NAME" </td>
				</tr>
                <tr>
					<td><div align="center"><label>AC ID</label></div></td>
					<td><input type="text" name="AC_ID"></td>
				</tr>
                <tr>
					<td><div align="center"><label>Service ID</label></div></td>
					<td><input type="text" name="SER_ID"></td>
				</tr>
                <tr>
					<td><div align="center"><label>Invoice Number</label></div></td>
					<td><input type="text" name="INV_NUM"></td>
				</tr>
                 <tr>
					<td><div align="center"><label>Invoice Date</label></div></td>
					<td><input type="text" name="INV_DATE">YYYY-MM-DD</td>
				</tr>
				<tr>
					<td><div align="center"><label>Total Amount</label></div></td>
					<td><input type="text" name="TOT_AMT"></td>
				</tr>
                <tr>
                    <td><div align="center"><label>Paid Date</label></div></td>
					<td><input type="text" name="PAID_DATE">YYYY-MM-DD</td>
				</tr>
				<tr>
					<td><div align="center"><label>Paid Status</label></div></td>
					<td><input type="text" name="PAID_STATUS"></td>
				</tr>
				<tr>
					<td colspan="2">
					<div align="center">
					<input type="Submit" name="save" value="Submit"> <input type="reset" name="Reset" value="Reset"> <input type="Button" name="back" value="Cancel">
					</div>
					</td>
				</tr>
                    </td></div>	
      </table>
		</form>
		<br>
		<br>
		<hr>
		</div>
	</body>
</html>