<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="mydatabase";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
	die("connection Failure:".mysqli_connect_error());
}

if(isset($_POST['save']))
{
	$INV_NUM = $_POST['INV_NUM'];
	$APP_ID = $_POST['APP_ID'];
	$INV_DATE = $_POST['INV_DATE'];
	$AMT_PAYABLE = $_POST['AMT_PAYABLE'];
	$PAID_DATE = $_POST['PAID_DATE'];
	$PAID_STATUS = $_POST['PAID_STATUS'];
	

	$sql_query = "INSERT INTO bill(INV_NUM,APP_ID,INV_DATE,AMT_PAYABLE,PAID_DATE,PAID_STATUS) VALUES ('$INV_NUM', '$APP_ID', '$INV_DATE', '$AMT_PAYABLE','$PAID_DATE', '$PAID_STATUS');";
	

if(mysqli_query($conn, $sql_query))
{
	echo "<br>Bill details entered successfully!";
}
else
{
	echo "<br><br>error " . $sql."".mysqli_error($conn); 
}

mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Bill</title>
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
            <h1>Updated Bill Table  </h1>
             <table border="2" style="width:40%; float:center; background-color:#FFFFFF";>
            <tr>
                <td align="center">Invoice Nmuber</td>
                <td align="center">Appointment ID</td>
                <td align="center">Invoice Date</td>
                <td align="center">Amount Payable</td>
                <td align="center">Paid Date</td>
                <td align="center">Paid Status</td>
            </tr>
                <?php

			$db = mysqli_connect("localhost","root","","mydatabase");
			if(!$db)
			{
				die("connection Failure:".mysqli_connect_error());
			}
			$query = mysqli_query($db,"SELECT * FROM BILL; ");
			while ($row = mysqli_fetch_assoc($query))
			{
				echo "<tr>";
				echo '<td align="center">'.$row['INV_NUM']."</td>";
				echo '<td align="center">'.$row['APP_ID']."</td>";
				echo '<td align="center">'.$row['INV_DATE']."</td>";
                echo '<td align="center">'.$row['AMT_PAYABLE']."</td>";
                echo '<td align="center">'.$row['PAID_DATE']."</td>";
                echo '<td align="center">'.$row['PAID_STATUS']."</td>";
                echo "</tr>";
                
			}
		?>
            </table>
            </div>
    </body>
</html>