<!DOCTYPE html>
<html>
    <head>
    <title>Quries3</title>
        <style>
         body{
                background-image: url(images/1486213969B1.jpg) ,url(images/download.png ) ;
                
             
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
                <td align="center">Customer ID</td>
                <td align="center">Customer First Name</td>
                <td align="center">Customer Last Name</td>
                <td align="center">Number of Appointments</td>
                <td align="center">Total spent</td>
            </tr>
                <?php

			$db = mysqli_connect("localhost","root","","mydatabase");
			if(!$db)
			{
				die("connection Failure:".mysqli_connect_error());
			}
			$query = mysqli_query($db,"SELECT CR.C_ID,CR.C_FNAME,CR.C_LNAME,COUNT(Q.APP_ID) NUM_OF_APPOINTMENTS,  SUM(Q.TOT_SPENT) TOTAL_SPENT 
            FROM CUSTOMER CR,APPOINTMENT AP, ( 
            SELECT A.APP_ID, SUM(BL.AMT_PAYABLE)  TOT_SPENT 
            FROM APPOINTMENT A,BILL BL  WHERE A.APP_ID=BL.APP_ID  GROUP BY A.APP_ID 
            ) Q
            WHERE CR.C_ID=AP.AC_ID AND AP.APP_ID=Q.APP_ID 
            GROUP BY CR.C_ID,C_FNAME,C_LNAME 
            ORDER BY C_FNAME,C_LNAME; ");
			while ($row = mysqli_fetch_assoc($query))
			{
				echo "<tr>";
				echo '<td align="center">'.$row['C_ID']."</td>";
				echo '<td align="center">'.$row['C_FNAME']."</td>";
                echo '<td align="center">'.$row['C_LNAME']."</td>";
                echo '<td align="center">'.$row['NUM_OF_APPOINTMENTS']."</td>";
                echo '<td align="center">'.$row['TOTAL_SPENT']."</td>";
				echo "</tr>";
                
			}
		?>
            </table>
            </div>
    </body>
</html>