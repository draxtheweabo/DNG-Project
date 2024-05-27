<?php
session_start();
?>
<html>
<style>
body {
background-image: url("Assets/BD.jpg");
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
.sidenav 
{
height: 100%;
width: 200px;
position: fixed;
z-index: 1;
top: 60;
left: 0;
background-color: #818181;
overflow-x: hidden;
}

.sidenav a 
{
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
top: 50px;
left: 210px;
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
    
/* 4 Icons */
 
.check {
position: absolute;
width: 15%;
height: 30%;
padding: 15px;
backdrop-filter: blur(5px) brightness(1.2);
background-color: rgba(255, 255, 255, 0.2);
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
color: white;
text-align: center;
top: 360px;
left: 220px
}
    
.check img {
width: 60%;
height: auto;
}

.pipol {
position: absolute;
width: 15%;
height: 30%;
padding: 15px;
backdrop-filter: blur(5px) brightness(1.2);
background-color: rgba(255, 255, 255, 0.2);
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
color: white;
text-align: center;
top: 360px;
left: 470px;
}
    
.pipol img {
width: 60%;
height: auto;
}
    
.like {
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
left: 720px;
}
    
    
.like img {
width: 60%;
height: auto;
}
    
.image {
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
<title>D&G Pacific</title>
</head>

<body>
<form action="Department Home Page.php" method="post">


<body>
    
<div class="topnav">
    <img src="Assets/DGLOGO.png" width="250px" height="auto" style="margin-left: 5px; margin-top: 9px;">
  <a i class="fa fa-power-off" href="index.php" style="font-family: inter; font-size: 16px; font-weight: bold; "></i><img src="Assets/navicons/power.png" alt="Power Button">  Logout</a>
</div>

<div class="sidenav">

  <a class="active" href="DepartmentHomePage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/activehome.png" alt="Home Icon">  Home</a>
    
  <a href="DepartmentRequestPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;"><img src="Assets/navicons/request.png" alt="Request Icon">  Request</a>
    
  <a href="DepartmentDashboardPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;"><img src="Assets/navicons/dashboard.png" alt="Dashboard Icon">  Dashboard</a>
     
</div>

 <!-- Header--> 
    
<div class="titleheader">
  <h1 style="font-family: inter; font-size: 40px; font-weight: bold; color: #D9D9D9">D&G Pacific</h1>
</div>
    
<!--<div class="ads">
<a href="https://www.leagueoflegends.com/en-ph/" target="_blank"><img src="Assets/ads.png" alt="ads"></a>
</div>-->
 <!-- Content-->
    
<div class="container">
  <p style="font-family: inter; font-size: 13px;">At D&G Pacific Corporation, we take immense pride in our commitment to delivering customer-specific, environmentally
    conscious cleaning and waste 
     management services for the private sector in the Philippines. 
    Our journey is not just about providing exceptional services but leading the charge in 
     developing sustainable, zero waste management practices.
<br>
<br>
As a member of the D&G Pacific family, you are not just an employee; you are a vital force driving
positive change. Your dedication and expertise  are instrumental in shaping a more sustainable and
positive change. Your dedication and expertise  are instrumental in shaping a more sustainable and
environmentally friendly future. Together, let's continue to lead, innovate, and make a difference
in the world of cleaning and waste management. Your efforts matter, and we are grateful to have you on this
transformative journey with us!
</p>
</div>
    
<!-- D&G Logo-->
<div class="logocontainer">
<img src="https://static.wixstatic.com/media/0719a7_1a725cd51e754487b435f0c6f48a9982~mv2.png/v1/crop/x_181,y_368,w_496,h_404/fill/w_391,h_319,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/0719a7_1a725cd51e754487b435f0c6f48a9982~mv2.png" alt="Header Image"> 
</div>   

<!-- 4 Icons-->
<div class="check">
<h1 style="font-family: inter; font-size: 18px;">SUSTAINABILITY</h1>
<br>
<img src= Assets/check.png> 
</div>  
    
<div class="pipol">
<h1 style="font-family: inter; font-size: 18px;">INNOVATION & EXCELLENCE</h1>
<img src= Assets/pipol.png> 
</div> 
    
<div class="like">
<h1 style="font-family: inter; font-size: 18px;">ENVIRONMENTALLY FRIENDLY WAY</h1>
<img src= Assets/like.png> 
</div> 
    
<div class="image">
<h1 style="font-family: inter; font-size: 18px;">ENVIRONMENTALLY FRIENDLY WAY</h1>
<img src= Assets/image.png> 
</div>
    
    
    
    
    
</form>
</body>
</html>

