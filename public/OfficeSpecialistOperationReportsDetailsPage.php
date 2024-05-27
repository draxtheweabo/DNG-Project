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
    
.topnav a img {
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
    
.sidenav a:hover 
{
background-color: #BCFCBC;
coLor: #000;
}

.sidenav a.active {
background-color: #303030;
color: white;
}

.container {
width: 55%;
margin: 10px;
padding: 10px;
text-align: justify;
background-color:
border: 1px solid #ccc;
margin-left: 200px;
margin-top: 120px;
font-family: Calibri, sans-serif;  
color: white;
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
top: 330px;
left: 10px;
z-index:99;
}
    
.ads img {
width: 110%;
height: auto;
}
    
.titleheader {
position: absolute;
top: 50px;
left: 720px;
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
position: absolute; /* Use absolute positioning */
top: 360px; /* Adjust the top position */
left: 970px; /* Adjust the left position */
}
    
.contents {
position: fixed;
width: 28%;
height: 35%;
padding : 20px;
backdrop-filter: blur(5px) brightness(1.2);
background-color: rgba(255, 255, 255, 0.2);
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
color: black;
text-align: left; /* Center the content horizontally */
font-family: inter;
border-radius: 8px;
top: 48%; /* Adjust the top position */
left: 57%;
transform: translate(-50%, -50%);    
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

.ads {
position: fixed;
top: 330px;
left: 10px;
z-index:99;
}
    
.ads img {
width: 110%;
height: auto;
}
</style>

<head>
<title>Office Specialist Operation Reports Page</title>
</head>

<body>
<form action="OfficeSpecialistOperationReportsDetailsPage.php" method="post">
<div align="center">
<b>Office Specialist Operation Reports Page</b>
</div>

</head>
<body>

<!--<div class="ads">
<a href="https://www.leagueoflegends.com/en-ph/" target="_blank"><img src="Assets/ads.png" alt="ads"></a>
</div>--> 
    
<div class="titleheader">
  <h1 style="font-family: inter; font-size: 30px; font-weight: bold; color: #4F4F4F">DETAILS</h1>
</div>
    
<div class="topnav">
    <img src="Assets/DGLOGO.png" width="250px" height="auto" style="margin-left: 5px; margin-top: 9px;">
  <a i class="fa fa-power-off" href="index.php" style="font-family: inter; font-size: 16px; font-weight: bold; "></i><img src="Assets/navicons/power.png" alt="Power Button">  Logout</a>
</div>  
    
<div class="sidenav">
  <a href="OfficeSpecialistHomePage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/home.png" alt="Home Icon"> Home</a>
    
  <a href="OfficeSpecialistRequestPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/request.png" alt="Request Icon"> Queue</a>
  <a href="OfficeSpecialistApprovedRequestPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/request.png" alt="Request Icon"> Approved Requests</a>
  <a class="active" href="OfficeSpecialistOperationReportsPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/activeoperation.png" alt="Operation Report Icon"> Catalogs</a>
    
  <a href="OfficeSpecialistRecordsPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/report.png" alt="Records Icon"> Records</a>
    
  <a href="OfficeSpecialistCreationPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/acc.png" alt="Account creation Icon">  Acc & Dep Creation</a>
   
  <a href="OfficeSpecialistForgotPasswordPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/pass.png" alt="Account creation Icon"> Forgot Password</a>  
</div>

<div class="contents">
<?php
 //Connect to Database
 $code = $_SESSION["code"];
 $username ="root";
 $password="";
 $database="lycorisdb";
 $conn = mysqli_connect("localhost",$username,$password,$database) or die ("Unable to select database"); 
 
 $code = $_SESSION["code"];
 $query = "SELECT user_name, code, tin, amount, date, time FROM op_report WHERE code ='$code'";
 $result = @mysqli_query($conn, $query);
 $query1 = "SELECT date FROM requests_tbl WHERE code ='$code'";
 $result1 = @mysqli_query($conn, $query1);
 if(mysqli_num_rows($result1) < 0)
 {
  $query1 = "SELECT date FROM archive WHERE code ='$code'";
  $result1 = @mysqli_query($conn, $query1);
 }
 $row1 = mysqli_fetch_array($result1);
 $row = mysqli_fetch_array($result);

 echo "<br><b>Operation Code: $row[1]</b>";
 echo "<br><b>Username: ".ucwords($row[0])."</b>";
 echo "<br><b>TIN#: $row[2]</b>";
 echo "<br><b>Amount Used: ".number_format($row[3],2)."</b>";
 echo "<br><b>Date of Report: $row[4]</b>";
 echo "<br><b>Time of Report: $row[5]</b>";
 echo "<br>
 <br>
 <div class='button-container'><input type='submit' class='button' name='details' value='Operation Details'>";
 if(isset($_POST["details"]))
 {
     $_SESSION["code"] = $code;
     $_SESSION["yearre"] = date('Y', strtotime($row1[0]));
     echo'<script> window.location="OfficeSpecialistRequestDetailsPage.php"; </script> ';
 }
?>
</div>
</form>
</body>
</html>

