<!DOCTYPE html>
<html>
	<head>
		<title>Entry Bill Details </title>
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
		<form action="bill_details.php" method="post">
			<table border="2" style="background-color:#FFFFFF;">
				<h1> Entry Bill Details</h1>
				<hr>
				<br>
				<tr>
                    <td><div align="center"><label>Invoice Number</label></div></td>
					<td><input type="text" name="INV_NUM"></td>
				</tr>
				<tr>
					<td><div align="center"><label>Application ID</label></td>
					<td><input type="text" name="APP_ID"></td>
				</tr> 
                 <tr>
					<td><div align="center"><label>Invoice Date</label></td>
					<td><input type="text" name="INV_DATE">YYYY-MM-DD</td>
				</tr>
				<tr>
					<td><div align="center"><label>Total Amount</label></td>
					<td><input type="text" name="AMT_PAYABLE"></td>
				</tr>
                <tr>
					<td><div align="center"><label>Paid Date</label></td>
					<td><input type="text" name="PAID_DATE">YYYY-MM-DD</td>
				</tr>
				<tr>
					<td><div align="center"><label>Paid Status</label></td>
					<td><input type="text" name="PAID_STATUS"></td>
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