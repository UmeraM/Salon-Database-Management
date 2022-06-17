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
    
}
?>





<html>
<head>
		<title>Invoice</title>
    <style>
    h1 {
        font-size: 50px; 
        font-weight: 100;
        background-color: blanchedalmond;
        color: #861BBF;
        text-decoration: none;
        }
    </style>
</head>
<body>
            <h1 align="center">Invoice</h1>
        
    <?php
            $query = mysqli_query($conn,"SELECT C.C_FNAME, C.C_LNAME, C.C_ADD,B.INV_NUM,B.APP_ID,B.INV_DATE,B.PAID_DATE,B.PAID_STATUS,MAX(B.AMT_PAYABLE),A.SER_NAME 
                      FROM appointment A ,bill B , customer C 
                      WHERE B.APP_ID=A.APP_ID AND A.AC_ID=C.C_ID AND B.APP_ID=7892;");
        
				while ($row = mysqli_fetch_assoc($query))
                {
                echo"<br>";
                echo'<h2 align="right"> Date:'.$row['INV_DATE'].'</h2>';
                echo '<h2>Customer Name:' .$row['C_FNAME']. ' ' .$row['C_LNAME'].'</h2>';
                echo '<h2>City:'.$row['C_ADD'].'<h2>';                
                echo "<h2>Invoice Number: ".$row['INV_NUM']."<h2>";
                echo "<h2>Appointment id: ".$row['APP_ID']."<h2>";
                
                }
        ?>
        <table border="20" align="center" style="width:40%; float:center; background-color:#FFFFFF";>
            <tr>
        <td align="center">SERVICE TAKEN</td>
        <td align="center">SERVICE COST</td>
        <td align="center">Discount</td>
        <td align="center">Amount Payable</td>
        <td align="center">Paid Status</td>
            </tr>
    <?php

			$db = mysqli_connect("localhost","root","","mydatabase");
			if(!$db)
			{
				die("connection Failure:".mysqli_connect_error());
			}
			$query = mysqli_query($conn,"SELECT C.C_FNAME, C.C_LNAME, C.C_ADD,B.INV_NUM,B.APP_ID,B.INV_DATE,B.PAID_DATE,B.PAID_STATUS,B.AMT_PAYABLE,A.SER_NAME 
                      FROM appointment A ,bill B , customer C 
                      WHERE B.APP_ID=A.APP_ID AND A.AC_ID=C.C_ID AND B.APP_ID=7892;");
			while ($row = mysqli_fetch_assoc($query))
			{
				echo "<tr>";
				echo '<td align="center">'.$row['SER_NAME']."</td>";
				echo '<td align="center">'.$row['AMT_PAYABLE']."</td>";
				echo '<td align="center">0</td>';
                echo '<td align="center">'.$row['AMT_PAYABLE']."</td>";
                echo '<td align="center">'.$row['PAID_STATUS']."</td>";
				echo "</tr>";
                
			}
		?>
    </table>
    <div align= "center" ;>
        <br>
                    <button onclick="window.print();">Print</button>	
    </div>
    </body>
</html>
