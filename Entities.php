<!--index.html-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Entities</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <style>
            
            body{
                background-image: url(images/1486213969B1.jpg) ,url(images/download.png ) ;
                background-repeat:repeat-y;
                background-size: 1500px 670px;
                background-blend-mode:lighten;    
                opacity: 1;
            }
            
            h1{
                font-size: 50px; 
                font-weight: 100;
                color:red;
                text-decoration: none;
                text-align: center;
            }
            h2 b{
                font-size: 30px:
                font-weight: 50;
                color: #861BBF;
                text-decoration: none;
                font-weight: bold;
            }
            
            p{
                color:currentColor;
                font-weight: bold;
            }
            
        </style>
    </head>
    <body>
                 <div>
             <h1>Entities</h1></div>
    <div>
            <h2>EMPLOYEE</h2>
             <p>To store basic employee attributes such as:</p>
             <ul>
                <li>Employee ID (E_ID) – Primary Key</li>
                <li>First Name (E_FNAME)</li>
                <li>Last Name (E_LNAME)</li>
                <li>Gender (E_GENDER)</li>
                <li>Date of Birth (E_DOB)</li>
                 <li>Address line  (E_ADDRRESS)</li>
                <li>Pin code (E_PINCODE)</li>
                <li>Phone Number (E_PHONE)</li>
                <li>E mail id (E_EMAIL)</li>
                <li>Employee Salary (E_SALARY)</li>
            </ul>
        </div>   
        <div>
            <h2>CUSTOMER</h2>
             <p>To store basic Customer attributes such as:</p>
             <ul>
                <li>Customer ID (C_ID) – Primary Key</li>
                <li>First Name (C_FNAME)</li>
                <li>Last Name (C_LNAME)</li>
                <li>Gender (C_GENDER)</li>
                <li>Date of Birth (C_DOB)</li>
                 <li>Address line  (C_ADDRESS)</li>
                <li>Pin code (C_PINCODE)</li>
                <li>Phone Number (C_PHONE)</li>
                <li>E mail id (C_EMAIL)</li>
            </ul>
        </div>   
        <div>
            <h2>APPOINTMENT</h2>
             <p>To store the basic Appointment information like:</p>
             <ul>
                <li>Appointment ID (APP_ID) – Primary Key</li>
                <li>Customer ID (C_ID) – Foreign Key</li>
                  <li>Customer ID (E_ID) – Foreign Key</li>
                <li>Appointment Date (APP_DATE)</li>
                <li>Appointment Time (APP_TIME)</li>
                 <li>Service Name(SER_NAME)</li>
            </ul>
        </div>   
         <div>
            <h2>SERVICE RENDERED</h2>
             <p>To store which service is being rendered at a given time. We store information
                 such as:</p>
             <ul>
                <li>Appointment ID (APP_ID) – Foreign Key</li>
                <li>Service ID (SER_ID) – Foreign Key</li>
                <li>Employee ID (E_ID) – Foreign Key</li>
                <li>Service Name(SER_NAME)</li>
            </ul>
        </div>
          <div>
            <h2>BILL</h2>
             <p>To store various fields related to Billing such as:</p>
             <ul>
                <li>Invoice Number (INV_NUM) – Primary Key</li>
                <li>Appointment ID (APP_ID) – Foreign Key</li>
                <li>Invoice Date (INV_DATE)</li>
                <li>Total Billed Amount (TOT_AMT)</li>
                <li>Discount Amount (DISC_AMT)</li>
                <li>Coupons Amount (COUP_AMT)</li>
                <li>Amount Payable (AMT_PAYABLE)</li>
                <li>Payment Date (PAID_DATE)</li>
                <li>Payment Status (PAID_STATUS)</li>

            </ul>
        </div>
    </body>
</html>