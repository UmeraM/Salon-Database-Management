<!DOCTYPE html>
<html>
    <head>
    <title>Quries5</title>
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
            <h1> DISPLAY THE CUSTOMERS, FOR WHOM EACH EMPLOYEE HAS 
                RENDERED SERVICE WITH SERVICE NAME</h1>
             <table border="2" style="width:40%; float:center; background-color:#FFFFFF";>
            <tr>
                <td align="center">Employee First Name</td>
                <td align="center">Employee Last Name </td>
                <td align="center">Customer First Name</td>
                <td align="center">Customer Last Name</td>
                <td align="center">Service Name</td>
            </tr>
                <?php

			$db = mysqli_connect("localhost","root","","mydatabase");
			if(!$db)
			{
				die("connection Failure:".mysqli_connect_error());
			}
			$query = mysqli_query($db,"SELECT EM.E_FNAME, EM.E_LNAME, CR.C_FNAME,CR.C_LNAME,SR.SER_NAME  
            FROM SERVICE_RENDERED SR,APPOINTMENT AP,CUSTOMER CR,BILL BL,  EMPLOYEE EM 
            WHERE CR.C_ID=AP.AC_ID AND SR.APP_ID=AP.APP_ID AND SR.SER_ID=SR.SER_ID AND  BL.APP_ID=AP.APP_ID AND EM.E_ID=SR.E_ID
            
            ORDER BY EM.E_FNAME, EM.E_LNAME;");
			while ($row = mysqli_fetch_assoc($query))
			{
				echo "<tr>";
				echo '<td align="center">'.$row['E_FNAME']."</td>";
				echo '<td align="center">'.$row['E_LNAME']."</td>";
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