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
    $C_ID = $_POST['C_ID'];
	$C_FNAME = $_POST['C_FNAME'];
	$C_LNAME = $_POST['C_LNAME'];
	$C_GENDER = $_POST['C_GENDER'];
	$C_DOB = $_POST['C_DOB'];
	$C_ADDRESS = $_POST['C_ADDRESS'];
	$C_PINCODE = $_POST['C_PINCODE'];
	$C_PHONE = $_POST['C_PHONE'];
	$C_EMAIL = $_POST['C_EMAIL'];
    $APP_ID = $_POST['APP_ID'];
    $APP_DATE = $_POST['APP_DATE'];
	$APP_TIME = $_POST['APP_TIME'];
	$SER_NAME = $_POST['SER_NAME'];
	$AC_ID = $_POST['AC_ID'];
    $SER_ID =$_POST['SER_ID'];
    $INV_NUM = $_POST['INV_NUM'];
    $INV_DATE = $_POST['INV_DATE'];
	$TOT_AMT = $_POST['TOT_AMT'];
	$PAID_DATE = $_POST['PAID_DATE'];
	$PAID_STATUS = $_POST['PAID_STATUS'];
	

	$sql_query1 = "INSERT INTO employee VALUES ('$E_ID', '$E_FNAME', '$E_LNAME', '$E_GENDER','$E_DOB', '$E_ADDRESS','$E_PINCODE','$E_PHONE','$E_EMAIL','$E_SALARY');";
    
    $sql_query2 = "INSERT INTO customer VALUES ('$C_ID', '$C_FNAME', '$C_LNAME', '$C_GENDER','$C_DOB', '$C_ADDRESS','$C_PINCODE','$C_PHONE','$C_EMAIL');";
    
    $sql_query3 = "INSERT INTO appointment VALUES ('$E_ID', '$APP_ID', '$APP_DATE', '$APP_TIME','$SER_NAME', '$AC_ID');";
    
    $sql_query4 = "INSERT INTO service_rendered VALUES ('$APP_ID', '$SER_ID', '$E_ID', '$SER_NAME');";
    
    $sql_query5 = "INSERT INTO bill VALUES ('$INV_NUM', '$APP_ID', '$INV_DATE', '$TOT_AMT','$PAID_DATE', '$PAID_STATUS');";
	

if(mysqli_query($conn, $sql_query1))
{
	echo "<br>Employee details entered successfully!";
}
else
{
	echo "<br><br>error " . $sql."".mysqli_error($conn); 
}
    
if(mysqli_query($conn, $sql_query2))
{
	echo "<br>Customer details entered successfully!";
}
else
{
	echo "<br><br>error " . $sql."".mysqli_error($conn); 
}
    
if(mysqli_query($conn, $sql_query3))
{
	echo "<br>Appointment details entered successfully!";
}
else
{
	echo "<br><br>error " . $sql."".mysqli_error($conn); 
}
    
if(mysqli_query($conn, $sql_query4))
{
	echo "<br>Service details entered successfully!";
}
else
{
	echo "<br><br>error " . $sql."".mysqli_error($conn); 
}
    
if(mysqli_query($conn, $sql_query5))
{
	echo "<br>Bill details entered successfully!";
}
else
{
	echo "<br><br>error " . $sql."".mysqli_error($conn); 
}

mysqli_close($conn);
}
?>