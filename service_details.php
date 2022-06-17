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
	$SER_ID = $_POST['SER_ID'];
	$E_ID = $_POST['E_ID'];
	$SER_NAME = $_POST['SER_NAME'];
	
	

	$sql_query = "INSERT INTO service_rendered VALUES ('$APP_ID', '$SER_ID', '$E_ID', '$SER_NAME');";
	

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
    <title>Service_rendered</title>
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
            <h1>Updated Service_rendered Table  </h1>
             <table border="2" style="width:40%; float:center; background-color:#FFFFFF";>
            <tr>
                <td align="center">Appointment ID</td>
                <td align="center">Service ID</td>
                <td align="center">Employee ID</td>
                <td align="center">Service Name</td>
            </tr>
                <?php

			$db = mysqli_connect("localhost","root","","mydatabase");
			if(!$db)
			{
				die("connection Failure:".mysqli_connect_error());
			}
			$query = mysqli_query($db,"SELECT * FROM service_rendered; ");
			while ($row = mysqli_fetch_assoc($query))
			{
				echo "<tr>";
				echo '<td align="center">'.$row['APP_ID']."</td>";
				echo '<td align="center">'.$row['SER_ID']."</td>";
				echo '<td align="center">'.$row['E_ID']."</td>";
                echo '<td align="center">'.$row['SER_NAME']."</td>";
                echo "</tr>";
                
			}
		?>
            </table>
            </div>
    </body>
</html>