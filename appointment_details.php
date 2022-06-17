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
	$APP_ID = $_POST['APP_ID'];
	$E_ID = $_POST['E_ID'];
	$APP_DATE = $_POST['APP_DATE'];
	$APP_TIME = $_POST['APP_TIME'];
	$SER_NAME = $_POST['SER_NAME'];
	$AC_ID = $_POST['AC_ID'];
	

	$sql_query = "INSERT INTO appointment VALUES ('$E_ID', '$APP_ID', '$APP_DATE', '$APP_TIME','$SER_NAME', '$AC_ID');";
	

if(mysqli_query($conn, $sql_query))
{
	echo "<br>Appointment details entered successfully!";
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
    <title>Appointment</title>
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
            <h1>Updated Appointment Table  </h1>
             <table border="2" style="width:40%; float:center; background-color:#FFFFFF";>
            <tr>
                <td align="center">Appointment ID</td>
                <td align="center">Employee ID</td>
                <td align="center">Appointment Date</td>
                <td align="center">Appointment Time</td>
                <td align="center">Service Name</td>
                <td align="center">Customer ID</td> 
            </tr>
                <?php

			$db = mysqli_connect("localhost","root","","mydatabase");
			if(!$db)
			{
				die("connection Failure:".mysqli_connect_error());
			}
			$query = mysqli_query($db,"SELECT * FROM appointment; ");
			while ($row = mysqli_fetch_assoc($query))
			{
				echo "<tr>";
				echo '<td align="center">'.$row['APP_ID']."</td>";
				echo '<td align="center">'.$row['E_ID']."</td>";
				echo '<td align="center">'.$row['APP_DATE']."</td>";
                echo '<td align="center">'.$row['APP_TIME']."</td>";
                echo '<td align="center">'.$row['SER_NAME']."</td>";
                echo '<td align="center">'.$row['AC_ID']."</td>";
                echo "</tr>";
                
			}
		?>
            </table>
            </div>
    </body>
</html>