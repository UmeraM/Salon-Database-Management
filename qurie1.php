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
	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
}

?>
<!--index.html-->
<!DOCTYPE html>
<html>
    <head>
    <title>Quries1</title>
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
            <h1>DISPLAYING LIST OF ALL SERVICES TAKEN BY CUSTOMER</h1>
             <table border="2" style="width:40%; float:center; background-color:#FFFFFF";>
            <tr>
                <td align="center">CUSTOMER FIRST NAME</td>
                <td align="center">CUSTOMER LAST NAME</td>
            <td align="center">SERVICE TAKEN</td>
            </tr>
                <?php

			$db = mysqli_connect("localhost","root","","mydatabase");
			if(!$db)
			{
				die("connection Failure:".mysqli_connect_error());
			}
			$query = mysqli_query($db,"SELECT CR.C_FNAME,CR.C_LNAME,SR.SER_NAME 
                FROM SERVICE_RENDERED SR,APPOINTMENT AP,CUSTOMER CR 
                WHERE CR.C_FNAME='$fname' AND CR.C_LNAME='$lname' AND CR.C_ID=AP.AC_ID AND  SR.APP_ID=AP.APP_ID AND SR.SER_ID=SR.SER_ID;");
			while ($row = mysqli_fetch_assoc($query))
			{
				echo "<tr>";
				echo '<td align="center">'.$row['C_FNAME']."</td>";
				echo '<td align="center">'.$row['C_LNAME']."</td>";
				echo '<td align="center">'.$row['SER_NAME']."</td>";
				echo "</tr>";
                
			}
		?>
            </table>
            </div>
    </body>
</html>