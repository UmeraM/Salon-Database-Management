<!DOCTYPE html>
<html>
    <head>
    <title>Quries4</title>
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
             <table border="2" style="width:40%; float:center; background-color:#FFFFFF";>
            <tr>
                <td align="center">Employee Frist NAME</td>
                <td align="center">Employee Last NAME</td>
                <td align="center">Total Number of Customers</td>
            </tr>
                <?php

			$db = mysqli_connect("localhost","root","","mydatabase");
			if(!$db)
			{
				die("connection Failure:".mysqli_connect_error());
			}
			$query = mysqli_query($db,"SELECT EM.E_FNAME, EM.E_LNAME, COUNT(SR.APP_ID) TOTAL_CUSTOMERS  
            FROM SERVICE_RENDERED SR,APPOINTMENT AP,CUSTOMER CR,BILL BL,  EMPLOYEE EM 
            WHERE CR.C_ID=AP.AC_ID AND SR.APP_ID=AP.APP_ID AND SR.SER_ID=SR.SER_ID AND  BL.APP_ID=AP.APP_ID AND EM.E_ID=SR.E_ID 
            GROUP BY EM.E_FNAME, EM.E_LNAME 
            ORDER BY EM.E_FNAME, EM.E_LNAME; ");
			while ($row = mysqli_fetch_assoc($query))
			{
				echo "<tr>";
				echo '<td align="center">'.$row['E_FNAME']."</td>";
				echo '<td align="center">'.$row['E_LNAME']."</td>";
				echo '<td align="center">'.$row['TOTAL_CUSTOMERS']."</td>";
				echo "</tr>";
                
			}
		?>
            </table>
            </div>
    </body>
</html>