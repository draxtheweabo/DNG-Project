<?php
session_start();
?>
<html>
<style>
body {
background-color:white;
background-size: 100% 100%; 
background-position: 40px right; 
background-repeat: no-repeat;
overflow-x: hidden;
  
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
left: 670px;
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
.button-container 
{
padding: 10px 15px;
text-align: center ;
}
 /*Janro pa usog nalang neto kahit san AHHAHAHH pwd kahit sa taas or sa baba*/
    
.contents {
position: fixed;
width: 100%;
text-align: center ;
height: 12%;
padding : 20px;
background-color: white;
color: black;
font-family: inter;
border-radius: 8px;
top: 93%; 
left: 57%;
transform: translate(-50%, -50%);    
}
    
/* Table CSS */   

.blue { color: #185875; }
.yellow { color: #FFF842; }

.amazing th h1 {
font-weight: bold;
font-size: 1em;
font-family: inter;
text-align: left;
color: #185875;
}

.amazing td {
font-weight: normal;
font-size: 1em;
-webkit-box-shadow: 0 2px 2px -2px #0E1119;
-moz-box-shadow: 0 2px 2px -2px #0E1119;
box-shadow: 0 2px 2px -2px #0E1119;
}

.amazing {
text-align: left;
overflow: hidden;
width: 80%;
display: table;
margin: 70 auto;
padding: 0 0 8em 0;
}
    
.amazing-container {
position: relative;
top:30px;
left: 8%;
   
}
    
.amazing td {
padding-bottom: 1%;
font-family: inter;
text-align: center;
color: white;
padding-top: 1%;
padding-left:1%;  
}
.amazing th {
padding-bottom: 1%;
font-family: inter;
text-align: center;
padding-top: 1%;
padding-left:1%;  
}

.amazing tr:nth-child(odd) {
background-color: #323C50;
}

.amazing tr:nth-child(even) {
background-color: #2C3446;
}

.amazing th {
background-color: #BEBEBE;
}


.amazing-container td:first-child:hover {
background-color: transparent;
color: white;
font-weight: normal;
box-shadow: none;
transform: none;
}
    
.amazing td:hover {
background-color: #93C572;
font-weight: bold;
color: white;
box-shadow: #3a5b25 -1px 1px, #3a5b25 -2px 2px, #3a5b25 -3px 3px, #3a5b25 -4px 4px, #3a5b25 -5px 5px, #3a5b25 -6px 6px;
transform: translate3d(6px, -6px, 0);
transition-delay: 0s;
transition-duration: 0.4s;
transition-property: all;
transition-timing-function: line;
}

.amazing-container input[type="submit"] {
background: none;
border: none;
color: white;
text-decoration: none;
cursor: pointer;
padding: 0;
font-family: inherit;
font-size: inherit;
}

.amazing-container input[name^="reject"]:hover {
background-color: #FF0000;
color: #FFFFFF;
}

.amazing-container input[name^="approve"]:hover {
background-color: #00FF00;
color: #FFFFFF;
}

.amazing-container .details-cell:hover {
  background-color:
  color:
  font-weight:
  box-shadow:
  transform:
  /* DISABLE ONLY FOR DETAILS HOVER*/
}

.amazing-container .operation-code-cell:hover {
background-color: transparent;
color: white;
font-weight: normal;
box-shadow: none;
transform: none;
}

.amazing-container .approval-cell:hover {
background-color: transparent;
color: white;
font-weight: normal;
box-shadow: none;
transform: none;
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
<title>Office Specialist Request Page</title>
</head>

<body>
    
<div align="center">
<b>Office Specialist Operation Reports Page</b>
</div>
    
<div class="topnav">
    <img src="Assets/DGLOGO.png" width="250px" height="auto" style="margin-left: 5px; margin-top: 9px;">
    <a i class="fa fa-power-off" href="index.php" style="font-family: inter; font-size: 16px; font-weight: bold; "></i><img src="Assets/navicons/power.png" alt="Power Button">  Logout</a>
</div>
    
<form action="OfficeSpecialistArchiveApprovedRequestPage.php" method="post">


</head>
<body>
    
<!--<div class="ads">
<a href="https://www.leagueoflegends.com/en-ph/" target="_blank"><img src="Assets/ads.png" alt="ads"></a>
</div>-->
    
<div class="sidenav">
    <a href="OfficeSpecialistHomePage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/home.png" alt="Home Icon"> Home</a>
    
    <a href="OfficeSpecialistRequestPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/request.png" alt="Request Icon"> Queue</a>
    
    <a class="active" href="OfficeSpecialistApprovedRequestPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/activerequest.png" alt="Request Icon"> Approved Requests</a>
    
    <a href="OfficeSpecialistOperationReportsPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/operation.png" alt="Operation Report Icon"> Catalogs</a>
    
    <a href="OfficeSpecialistRecordsPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/report.png" alt="Records Icon"> Records</a>
    
  <a href="OfficeSpecialistCreationPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/acc.png" alt="Account creation Icon"> Acc & Dep Creation</a>
    
   <a href="OfficeSpecialistForgotPasswordPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/pass.png" alt="Account creation Icon"> Forgot Password</a>  
</div>  
    
<div class="titleheader">
    
  <h1 style="font-family: inter; font-size: 30px; font-weight: bold; color: #4F4F4F">LIST OF APPROVED REQUESTS</h1>
    
</div>
    
<?php
 //Connect to Database
 $username ="root";
 $password="";
 $database="lycorisdb";
 $conn = mysqli_connect("localhost",$username,$password,$database) or die ("Unable to select database"); 
 $month = date("m");
 $user_name = $_SESSION["user"];
 $department = $_SESSION["department"];
 if($department == "")
 {
 $query = "SELECT date , code,gencode FROM requests_tbl WHERE status ='1' AND report='0' and MONTH(date)!='$month'";
 }
 else
 {
  $query = "SELECT date , code,gencode FROM requests_tbl WHERE status ='1' AND Department = '$department'AND report='0' and MONTH(date)!='$month'";
 }
 $result = @mysqli_query($conn, $query);
?>

<div class="amazing-container">
    <table class="amazing">
    <thead>
        <tr>
            <th>DATE</th>
            <th>DETAILS</th>
            <th>OPPERATION CODE</th>
        </tr>
    </thead>
    
  <tbody>
  <?php
  $i=0;
  while ($row = mysqli_fetch_array($result)) 
  {

    $code = $row[1];
    $gen = $row[2];
    echo "
    <tr>
      <td class='date-cell'>$row[0]</td>
      <td class='details-cell'><input type='submit' name='details$i' value='CODE'></td>
      <td class='operation-code-cell'>$row[1]</td>
    </tr>";

    if (isset($_POST["details" . $i])) 
    {
        $_SESSION["code"] = $code;
        echo '<script> alert("Operation: '.$code.'\n Your Confirmation Code is: '.$gen.'")</script>';
        echo '<script> window.location="OfficeSpecialistApprovedRequestpage.php"; </script> ';
       
    }
    $i++;
  }
  ?>
</tbody>
</table>
<!-- Janro pa usog nalang neto kahit san AHHAHAHH pwd kahit sa taas or sa baba-->
<div class='contents'>
<b>Department:</b>
<?php
$con = mysqli_connect("localhost","root","","lycorisdb");
$sql = "SELECT * FROM `departments`";
$all_categories = mysqli_query($con,$sql);
?>
<select  name="department" id="department">
<option value="0" selected hidden>Choose Department</option>
<?php while ($category = mysqli_fetch_array($all_categories,MYSQLI_ASSOC)):;?>
<option value="<?php echo $category["name"];?>">
<?php echo $category["name"];?>
</option>
<?php 
endwhile; 
?>
</select>
<div class='button'><input type='submit' name='Sort' value='Sort'></div>
<div class='button'><input type='submit' name='Clear' value='Clear'></div>
<div class='button'><input type='submit' name='Back' value='Back'></div>
</div>
<?php
 if(isset($_POST["Clear"]))
 {
  $_SESSION["department"] = "";
  echo '<script>window.location="OfficeSpecialistArchiveApprovedRequestPage.php";</script>';
 }
 if(isset($_POST["Back"]))
 {
  $_SESSION["department"] = "";
  echo '<script>window.location="OfficeSpecialistApprovedRequestPage.php";</script>';
 }
 if(isset($_POST["Sort"]))
 {
  $department = $_POST['department'];
  $_SESSION["department"] = $department;
  echo '<script>window.location="OfficeSpecialistArchiveApprovedRequestPage.php";</script>';
 }
?>
</form>
</body>
</html>

