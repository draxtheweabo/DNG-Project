<?php
session_start();
?>
<html>
<style>
    
body {
background-size: 100% 100%;
background-position: 40px right;
background-repeat: no-repeat;     
}

.topnav {
overflow: hidden;
background-color: #93C572;
height: 9.8%;
width: 100%;
position: fixed;
z-index: 1;
top: 0;
left: 0;
}
    
.topnav a img 
{
width: 19px;
height: 19px;
margin-right: 2px;
margin-left: -20px;
vertical-align: middle;
}

.topnav a {
float: right;
color: #FFFFFF;
text-align: right;
padding: 20px 20px;
text-decoration: none;
font-size: 16px;
display: inline-block;
line-height: -2.5;
}

.topnav a:hover {
border: 1px solid #f44336;
padding: 20px 30px;
background: #f44336;
transition: 0.5s;
}

.topnav a.active {
background-color: #000000;
color: white;
}
    
.sidenav {
height: 100%;
width: 200px;
position: fixed;
z-index: 1;
top: 60;
left: 0;
background-color: #818181;
overflow-x: hidden;
}

.sidenav a {
padding: 10px 10px 10px 32px;
text-decoration: none;
background-color: #98FF98ff;
font-size: 15px;
color: #000000 ;
display: block;
}
    
 .sidenav a img {
width: 19px;
height: 19px;
margin-right: 2px;
margin-left: -20px;
}
    
.sidenav a:hover {
background-color: #BCFCBC;
coLor: #000;
}

.sidenav a.active {
background-color: #303030;
color: white;
}

.contents {
position: fixed;
width: 28%;
height: 50%;
padding :10px;
backdrop-filter: blur(5px) brightness(1.2);
background-color: rgba(255, 255, 255, 0.2);
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
color: black;
text-align: left;
font-family: inter;
border-radius: 8px;
top: 50%;
left: 57%;
transform: translate(-50%, -50%);    
}
    
.contents img {
width: 60%;
height: auto;
}

.button {
background-color: #4CAF50; /* Green */
border: none;
color: white;
padding: 8px 15px;
text-decoration: none;
display: inline-block;
font-size: 16px;
border-radius: 8px;
cursor: pointer;
margin: 4px 2px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); 
}

.button:hover {
background-color: #cccccc;
coLor: #000;
}
    
.button-container {
text-align: center;
}
    
.logocontainer {
position: fixed;
top: 70px;
left: 940px;
background-color:
}
    
.logocontainer img {
width: 90%;
height: auto;
}
  
.ads {
position: fixed;
top: 250px;
left: 10px;
z-index:99;
}
    
.ads img {
width: 110%;
height: auto;
}
    
.titleheader {
position: absolute;
top: 60px;
left: 710px;
} 
    
.power img {
width: 60%;
height: auto;
}

.power {
width: 15%;
height: 30%;
padding: 15px;
backdrop-filter: blur(5px) brightness(1.2);
background-color: rgba(255, 255, 255, 0.2);
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
color: white;
text-align: center;
position: absolute;
top: 360px; 
left: 970px;
}
    
.image img {
width: 60%;
height: auto;
}

</style>

<head>
<title>Department Dashboard Page</title>
</head>

<body>
<form action="Department Dashboard Details Page.php" method="post">
<div align="center">
<b>Department Dashboard Details Page</b>
</div>
</head>
<!--<div class="ads">
<a href="https://www.leagueoflegends.com/en-ph/" target="_blank"><img src="Assets/ads.png" alt="ads"></a>
</div>-->   
<body>
<div class="topnav">
    <img src="Assets/DGLOGO.png" width="250px" height="auto" style="margin-left: 5px; margin-top: 9px;">
  <a i class="fa fa-power-off" href="index.php" style="font-family: inter; font-size: 16px; font-weight: bold;"></i><img src="Assets/navicons/power.png" alt="Power Button">  Logout</a>
</div>
    
<div class="titleheader">
  <h1 style="font-family: inter; font-size: 30px; font-weight: bold; color: #4F4F4F">DETAILS</h1>
</div>
    
<div class="sidenav">

  <a href="DepartmentHomePage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/home.png" alt="Home Icon">  Home</a>
    
  <a href="DepartmentRequestPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;"><img src="Assets/navicons/request.png" alt="Request Icon">  Request</a>
    
  <a class="active" href="DepartmentDashboardPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;"><img src="Assets/navicons/activedashboard.png" alt="Dashboard Icon">  Dashboard</a>
    
 </div>
<div class="contents">     
<div class="main">
<?php
 //Connect to Database
 $code = $_SESSION["code"];
 $username ="root";
 $password="";
 $database="lycorisdb";
 $conn = mysqli_connect("localhost",$username,$password,$database) or die ("Unable to select database"); 
 
 $user_name = $_SESSION["user"];
 $query = "SELECT request,requestor,date,time,client,address,type,particulars,amount,status,gencode FROM requests_tbl WHERE code ='$code'";
 $result = @mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 
 if($row[0] ==1){$type="Replenishment of Revolving Fund";}
 else if ($row[0] == 2){$type="Reimbursement";}
 else if ($row[0] == 3){$type="Replenishment of Cash";}
 
 if($row[9]==0){$status ="<span style='color: gray;'>PENDING</span>";}
 else if($row[9]==1){$status ="<span style='color: green;'>APPROVED</span>";}
 else if($row[9]==2){$status ="<span style='color: red;'>REJECTED</span>";}
 
 if($row[6]==1){$expense ="Meals";}
 else if($row[6]==2){$expense ="Commute";}
 else if($row[6]==3){$expense ="Communication";}
 else if($row[6]==4){$expense ="Parking";}
 else if($row[6]==5){$expense ="Gas";}
 else if($row[6]==6){$expense ="R&M";}
 else if($row[6]==7){$expense ="Manpower";}
 else if($row[6]==8){$expense ="Equipment";}
 else if($row[6]==9){$expense ="Barracks";}
 else if($row[6]==10){$expense ="Office Suplies";}
 else if($row[6]==11){$expense ="Ins & Reg";}
 else if($row[6]==12){$expense ="Others";}

 echo "<br><b>Type of Request: $type</b>";
 echo "<br><b>Requestor: ".ucwords($row[1])."</b>";
 echo "<br><b>Date of Request: $row[2]</b>";
 echo "<br><b>Client: ".ucwords($row[4])."</b>";
 echo "<br><b>Address: ".ucwords($row[5])."</b>";
 echo "<br><b>Expenses Type: $expense</b>";
 echo "<br><b>Particulars: ".ucwords($row[7])."</b>";
 echo "<br><b>Amount: ".number_format($row[8],2)."</b>";
 echo "<br><b>Status: $status</b>";
 echo "<br><b>Operation Code: $code</b>";
 echo "<br><b>Generated Code: $row[10]</b>";

?>
</div>
</form>
</body>
</html>

