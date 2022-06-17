<!--index.html-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inertion of values</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <style>
            
            body{
                background-image: url(images/1486213969B1.jpg) ,url(images/download.png ) ;
                background-repeat: no-repeat;
                background-size: 1500px 900px;
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
            h2 {
                font-size: 30px:
                font-weight: 50;
                color: black;
                text-decoration: none;
                font-weight: bold;
            }
            
            
            p{
                color:currentColor;
                font-weight: bold;
            }
            
            #leftsidebar ul li{
                padding: 4px 0 4px 10px;
                list-style-image: url(images/arrow.png);
            }
           
            a, li {
                text-decoration: none;
                font-size: 40px;
                color:red;
                -webkit-transition: font-size 0.3s ease;
                -moz-transition: font-size 0.3s ease;
                -o-transition: font-size 0.3s ease;
                -ms-transition: font-size 0.3s ease;
                transition: font-size 0.3s ease;
            }
            
        </style>
    </head>
    <body>
        
        <h2>Chapter 9</h2>
        <div>
            <h1>Insertion of values</h1>
        </div>
        <div>
            <h2>Inserting values table vise</h2>
            <div id="leftsidebar" class="sidebar">
                <ul>
                    <li><a href="emp_form.php">Employee table</a></li>
                    <li><a href="cust_form.php">Customer table</a></li>
                    <li><a href="app_form.php">appointnment</a></li>
                    <li><a href="service_form.php">Service_render</a></li>
                    <li><a href="bill_form.php">Bill</a></li>
                
                </ul>
                <h1><a href="all_table_form.php">Inserting all values at a time</a></h1>
            </div>
        </div>  
 
           
    </body>
</html>