    <!--index.html-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DBMS MINI PROJECT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <style>body{
    font: Arial, Helvetica, sans-serif;
}

#container {
    width: 1050px;
/*    border: 1px solid grey;*/
    margin: 0 auto;
}

#header{
    height: 100px;
    padding: 10px 0;
}

#brand{
    float: left;   
}

h1 a{
    font-size: 50px; 
    font-weight: 100;
    color: #861BBF;
    text-decoration: none;
}

#searchBox{
    float: right;
    background: linear-gradient(#E4F2B9, #B7E953);
    background: -webkit-linear-gradient(#E4F2B9, #B7E953);
    background: -o-linear-gradient(#E4F2B9, #B7E953);
    background: -moz-linear-gradient(#E4F2B9, #B7E953);
    width: 400px;
    height: 50px;
    padding: 20px 20px 0 20px;
    margin-top: 20px;
}

.text{
    float: left; 
    width: 200px;
    padding: 5px;
    font-size: 15px;
    color: #E36A0C;
    background: white url(images/search.png) right center no-repeat;
    border: 1px solid #C8D03E;
}

.submit{
    float: right;
    padding: 5px;
    font-weight: bold;
    color: white;
    background: #A751D6;
    font-size: 15px;
    border: 1px solid #DCD5E1;
}

.clear{
    clear: both;   
}

#menu{
    height: 70px;
    background: linear-gradient(#F8F594, #D5D533);
    background: -webkit-linear-gradient(#F8F594, #D5D533);
    background: -o-linear-gradient(#F8F594, #D5D533);
    background: -moz-linear-gradient(#F8F594, #D5D533);
    padding: 7px 0;
}
ul{
    list-style: none;   
}

#menu ul li{
    float: left;
    padding: 0 30px;
    height: 30px;
    border-right: 1px solid #5d12e7;
}

#menu ul li:last-child{
    border-right: none;   
}

#menu ul li a{
    text-decoration: none;
    text-transform: uppercase;
    font-size: 17px;
    color: #5d12e7;
    line-height: 30px;
    -webkit-transition: font-size 0.3s ease;
    -moz-transition: font-size 0.3s ease;
    -o-transition: font-size 0.3s ease;
    -ms-transition: font-size 0.3s ease;
    transition: font-size 0.3s ease;
}

#menu ul li a:hover, #menu ul li a.active{
    font-size: 20px;
    font-weight: bold;
    color: #B314DB;
}

#introduction{
    background: linear-gradient(#E5F2BB, #B7E952); 
    background: -webkit-linear-gradient(#E5F2BB, #B7E952); 
    background: -o-linear-gradient(#E5F2BB, #B7E952); 
    background: -moz-linear-gradient(#E5F2BB, #B7E952); 
    padding: 30px;
    margin: 16px 0;
}

#introduction h3{
    font-size: 45px;
    color: #316901;
    font-weight: normal;
}

#introduction p{
    font-size: 25px; 
    color: #628F19;
    text-align: justify;
}

.sidebar{
    height: 500px;
    width: 450px;
    border: 1px solid #BAF46F;
    border-radius: 20px;
    padding: 10px 30px;
}

.sidebar h3{
    color: #B314DB;
    font-size: 30px;
}

.sidebar ul{
    padding-top: 8px;   
}
#leftsidebar ul li{
    padding: 4px 0 4px 10px;
    list-style-image: url(images/arrow.png);
}

#rightsidebar ul li{
    padding: 17px 0 17px 70px;
    background: url(images/tick.png) no-repeat left center;
}
.sidebar ul li a{
    text-decoration: none;
    font-size: 20px;
    color: #5d12e7;
    -webkit-transition: font-size 0.3s ease;
    -moz-transition: font-size 0.3s ease;
    -o-transition: font-size 0.3s ease;
    -ms-transition: font-size 0.3s ease;
    transition: font-size 0.3s ease;
}

.sidebar ul li a:hover, .sidebar ul li a.active{
    text-decoration: none;
    color: #B314DB;
    font-size: 23px;
    font-weight: bold;
}


#leftsidebar{
    float: left;   
}

#rightsidebar{
    float: right;
}

.footer{
    height: 60px;
    width: auto;
    background: linear-gradient(#F6F390, #D5D533);
    background: -webkit-linear-gradient(#F6F390, #D5D533);
    background: -o-linear-gradient(#F6F390, #D5D533);
    background: -moz-linear-gradient(#F6F390, #D5D533);
    padding: 10px 30px;
    margin-top: 15px
}</style>
    </head>
    
    <body>
        <div id="container">
            <div id="header">
                <div id="brand">
                    <h1><a href="#">DBMS MINI PROJECT</a></h1>
                </div>
                <div id="searchBox">
                    <form method="get">
                        <input type="text" class="text">
                        <input type="submit" value="Search a topic" class="submit">
                    </form>
                </div>
                <div class="clear">
                
                </div>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Project Report</a></li>
                    <li><a href="#">About us</a></li>
                </ul>
            </div>
            <div id="introduction">
                <h3>SALON DATABASE</h3>
                <p>The following material document the design and development of a database application to
                    support a small salon. The project begins with description as to how our model eclipse the cons
                    of existing system and proceeds through conceptual ER diagram, logical Relational Schema
                    model and finally implementation of the database application.....</p>
            </div>
            <div id="leftsidebar" class="sidebar">
                <h3>Go to:</h3>
                <ul>
                    <li><a href="Overview_of_Project.php">Overview of Project</a></li>
                    <li><a href="Requirement_Specification.php">System Requirement Specification</a></li>
                    <li><a href="Description.php">Description</a></li>
                    <li><a href="Entities.php">Entities</a></li>
                    <li><a href="Relationship.php">Relationship</a></li>
                    <li><a href="images/ER_Diagram.png">ER Diagram</a></li>
                    <li><a href="images/relation_schema.jpeg">Relational Schema Diagram</a></li>
                    <li><a href="Insertion.php">Insertion of values</a></li>
                    <li><a href="quries.php">Queries</a></li>
                
                </ul>
            </div>
            <div id="rightsidebar" class="sidebar">
                <h3>About us</h3>
                <ul>
                    <li><a href="#">Team members :-</a></li>
                    <li><a href="#">
                        <ol>1.Name:Sumanth K</ol><br>
                        <ol> &nbsp;&nbsp;  USN: 1DA19CS169</ol>
                     </a></li>
                    <li><a href="#">
                        <ol>2.Name:Umera</ol><br>
                        <ol> &nbsp;&nbsp;  USN: 1DA19CS183</ol>
                     </a></li>
                    
                </ul>
            </div>
            <div class="clear"></div>
            <footer class="footer">
                <div>
                    <h4>THANK YOU</h4>
                </div>
            </footer>
        </div> 
    
    </body>

</html>