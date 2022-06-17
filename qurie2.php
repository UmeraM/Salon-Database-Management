<!DOCTYPE html>
<html>
    <head>
    <title>Quries2</title>
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
            <h1>ALL CUSTOMERS AND THEIR SERVICES AND BILL AMOUNT  </h1>
             <table border="2" style="width:40%; float:center; background-color:#FFFFFF";>
            <tr>
                <td align="center">CUSTOMER First NAME</td>
                <td align="center">CUSTOMER Last NAME</td>
                <td align="center">SERVICE TAKEN</td>
                <td align="center">Amount Payable</td>
            </tr>
                <?php

			$db = mysqli_connect("localhost","root","","mydatabase");
			if(!$db)
			{
				die("connection Failure:".mysqli_connect_error());
			}
			$query = mysqli_query($db,"SELECT CR.C_FNAME,CR.C_LNAME,SR.SER_NAME, BL.AMT_PAYABLE 
            FROM SERVICE_RENDERED SR,APPOINTMENT AP,CUSTOMER CR,BILL BL 
            WHERE CR.C_ID=AP.AC_ID AND SR.APP_ID=AP.APP_ID AND SR.SER_ID=SR.SER_ID AND  BL.APP_ID=AP.APP_ID 
            ORDER BY CR.C_FNAME, CR.C_LNAME; ");
			while ($row = mysqli_fetch_assoc($query))
			{
				echo "<tr>";
				echo '<td align="center">'.$row['C_FNAME']."</td>";
				echo '<td align="center">'.$row['C_LNAME']."</td>";
                echo '<td align="center">'.$row['SER_NAME']."</td>";
                echo '<td align="center">'.$row['AMT_PAYABLE']."</td>";
				echo "</tr>";
                
			}
		?>
            </table>
            </div>
    </body>
</html>