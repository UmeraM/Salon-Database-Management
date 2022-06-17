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
	$C_ID = $_POST['C_ID'];
	$C_FNAME = $_POST['C_FNAME'];
	$C_LNAME = $_POST['C_LNAME'];
	$C_GENDER = $_POST['C_GENDER'];
	$C_DOB = $_POST['C_DOB'];
	$C_ADDRESS = $_POST['C_ADDRESS'];
	$C_PINCODE = $_POST['C_PINCODE'];
	$C_PHONE = $_POST['C_PHONE'];
	$C_EMAIL = $_POST['C_EMAIL'];
	

	$sql_query = "INSERT INTO customer VALUES ('$C_ID', '$C_FNAME', '$C_LNAME', '$C_GENDER','$C_DOB', '$C_ADDRESS','$C_PINCODE','$C_PHONE','$C_EMAIL');";
	

if(mysqli_query($conn, $sql_query))
{
	echo "<br>Customer details entered successfully!";
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
    <title>Customer</title>
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
            <h1>Updated Employee Table  </h1>
        <table border="2" style="width:40%; float:center; background-color:#FFFFFF";>
            <tr>
                <td align="center">Customer ID</td>
                <td align="center"> First NAME</td>
                <td align="center"> Last NAME</td>
                <td align="center"> Gender</td>
                <td align="center"> DOB</td>
                <td align="center"> Address</td>
                <td align="center">Pincode</td>
                <td align="center">Phone Number</td>
                <td align="center">Email</td>
            </tr>
                <?php

			$db = mysqli_connect("localhost","root","","mydatabase");
			if(!$db)
			{
				die("connection Failure:".mysqli_connect_error());
			}
			$query = mysqli_query($db,"SELECT * FROM customer; ");
			while ($row = mysqli_fetch_assoc($query))
			{
				echo "<tr>";
				echo '<td align="center">'.$row['C_ID']."</td>";
				echo '<td align="center">'.$row['C_FNAME']."</td>";
				echo '<td align="center">'.$row['C_LNAME']."</td>";
                echo '<td align="center">'.$row['C_GENDER']."</td>";
                echo '<td align="center">'.$row['C_DOB']."</td>";
                echo '<td align="center">'.$row['C_ADD']."</td>";
                echo '<td align="center">'.$row['C_PINCODE']."</td>";
                echo '<td align="center">'.$row['C_PHONE']."</td>";
                echo '<td align="center">'.$row['C_EMAIL']."</td>";
                echo "</tr>";
                
			}
		?>
            </table>
            </div>
    </body>
</html>
