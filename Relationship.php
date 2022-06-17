<!--index.html-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Relationship</title>
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
        
        <h2>Chapter 2</h2>
        <div>
            <h1>Relationship</h1>
        </div>
        <div>
            <ul>
                <li>One Customer may be making one or more Appointment</li><br>
                <li>One Appointment must be a reservation for one and only one Customer</li><br>
                <li>One Service may be a service rendered as one or more Service Rendered</li><br>
                <li>One Service Rendered must be a rendering of one and only one Service</li><br>
                <li>One Employee may be rendering one or more Service Rendered</li><br>
                <li>One Service Rendered must be rendered by one and only one Employee</li><br>
                <li>One Appointment may be a reservation to provide one or more Service Rendered</li><br>
                <li>One Service Rendered must be a specific service rendered during one and only one Appointment</li><br>
                <li>One Appointment will be billing only one Bill</li><br>
                <li>One Customer at a time may be billing only one Bill</li><br>
            </ul>
        </div>
           
    </body>
</html>