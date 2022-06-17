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
	$E_ID = $_POST['E_ID'];
	$E_FNAME = $_POST['E_FNAME'];
	$E_LNAME = $_POST['E_LNAME'];
	$E_GENDER = $_POST['E_GENDER'];
	$E_DOB = $_POST['E_DOB'];
	$E_ADDRESS = $_POST['E_ADDRESS'];
	$E_PINCODE = $_POST['E_PINCODE'];
	$E_PHONE = $_POST['E_PHONE'];
	$E_EMAIL = $_POST['E_EMAIL'];
	$E_SALARY = $_POST['E_SALARY'];
	

	$sql_query = "INSERT INTO employee VALUES ('$E_ID', '$E_FNAME', '$E_LNAME', '$E_GENDER','$E_DOB', '$E_ADDRESS','$E_PINCODE','$E_PHONE','$E_EMAIL','$E_SALARY');";
	

if(mysqli_query($conn, $sql_query))
{
	echo "<br>Employee details entered successfully!";
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
    <title>Employee</title>
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
                <td align="center">Employee ID</td>
                <td align="center"> First NAME</td>
                <td align="center"> Last NAME</td>
                <td align="center"> Gender</td>
                <td align="center"> DOB</td>
                <td align="center"> Address</td>
                <td align="center">Pincode</td>
                <td align="center">Phone Number</td>
                <td align="center">Email</td>
                <td align="center">Salary</td>
            </tr>
                <?php

			$db = mysqli_connect("localhost","root","","mydatabase");
			if(!$db)
			{
				die("connection Failure:".mysqli_connect_error());
			}
			$query = mysqli_query($db,"SELECT * FROM employee; ");
			while ($row = mysqli_fetch_assoc($query))
			{
				echo "<tr>";
				echo '<td align="center">'.$row['E_ID']."</td>";
				echo '<td align="center">'.$row['E_FNAME']."</td>";
				echo '<td align="center">'.$row['E_LNAME']."</td>";
                echo '<td align="center">'.$row['E_GENDER']."</td>";
                echo '<td align="center">'.$row['E_DOB']."</td>";
                echo '<td align="center">'.$row['E_ADDRESS']."</td>";
                echo '<td align="center">'.$row['E_PINCODE']."</td>";
                echo '<td align="center">'.$row['E_PHONE']."</td>";
                echo '<td align="center">'.$row['E_EMAIL']."</td>";
                echo '<td align="center">'.$row['E_SALARY']."</td>";
				echo "</tr>";
                
			}
		?>
            </table>
            </div>
    </body>
</html>
