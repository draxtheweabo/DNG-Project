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

.contents {
position: fixed;
width: 28%;
height: 30%;
padding :10px;
backdrop-filter: blur(5px) brightness(1.2);
background-color: rgba(255, 255, 255, 0.2);
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
color: black;
text-align: left;
font-family: inter;
border-radius: 8px;
top: 40%;
left: 57%;
transform: translate(-50%, -50%);    
}
    
.contents img {
width: 60%;
height: auto;
}

.button {
background-color: #4CAF50;
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
left: 580px;
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
<title>D&G PACIFIC</title>
</head>

<body>
<form action="DepartmentReportPage.php" method="post">



<body>
<div class="topnav">
    <img src="Assets/DGLOGO.png" width="250px" height="auto" style="margin-left: 5px; margin-top: 9px;">
  <a i class="fa fa-power-off" href="index.php" style="font-family: inter; font-size: 16px; font-weight: bold;"></i><img src="Assets/navicons/power.png" alt="Power Button">  Logout</a>
</div>

<div class="sidenav">

  <a href="DepartmentHomePage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/home.png" alt="Home Icon">  Home</a>
    
  <a href="DepartmentRequestPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;"><img src="Assets/navicons/request.png" alt="Request Icon">  Request</a>
    
  <a class="active" href="DepartmentDashboardPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;"><img src="Assets/navicons/activedashboard.png" alt="Dashboard Icon">  Dashboard</a>
</div> 

<!--<div class="ads">
<a href="https://www.leagueoflegends.com/en-ph/" target="_blank"><img src="Assets/ads.png" alt="ads"></a>
</div>--> 
    
<div class="titleheader">
  <h1 style="font-family: inter; font-size: 30px; font-weight: bold; color: #4F4F4F">OPERATION REPORT FORM</h1>
</div>
    
<div class="contents">
<br>
<div class="main">
<b>Operation Code:</b>
<?php
$code = $_SESSION["code"]; 
echo"$code";
?>

<br>
<br>

<b>TIN No.:</b>
<input type="text" size=34 maxlength=30 name="tin"/> 

<br>
<br>

<b>Used Amount:</b>
<input type="text" size=27 maxlength=30 name="usedamount" required/> 

<br>
<br>
<div class="button-container">
      <input type="submit" onclick="myFunction()" name="submit" value="SUBMIT" class="button">
</div>
<script>
function myFunction()
{
let text = "Are all entries correct?.";
if (confirm(text) == true)
{
  document.cookie="ans=0";
}
else
{
  document.cookie="ans=1";
}
}
</script>
<?php
if (isset($_POST['submit']))
{
  $ans = $_COOKIE['ans'];
  if($ans == 0)
  {
 //Connect to Database
  $username ="root";
  $password="";
  $database="lycorisdb";
  $conn = mysqli_connect("localhost",$username,$password,$database) or die ("Unable to select database"); 
  $user_name = $_SESSION["user"];
  date_default_timezone_set('Asia/Manila');
  $today=date("Y-m-d");
  $time=date("h:i:sa");

  //Get input
  $tin = $_POST['tin'];
  $usedamount = $_POST['usedamount'];
  
  $query = "SELECT status ,amount FROM requests_tbl WHERE code ='$code'";
  $result1 = @mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result1);

  //check if code already exist
  function codeExists($conn, $code) 
  {
    $sql = "SELECT * FROM requests_tbl WHERE code = '$code'";
    $result = $conn->query($sql);
    return $result->num_rows > 0;
  }
  function sent($conn, $code) 
  {
    $sql = "SELECT * FROM op_report WHERE code = '$code'";
    $result = $conn->query($sql);
    return $result->num_rows > 0;
  }

  if(codeExists($conn, $code))
  {
    if(sent($conn, $code))
    {
      //? REMOVE
      echo '<script>  alert("You have already sent a report."); </script> ';//add
    }
    else
    { 
       if(ctype_alpha($usedamount))
      {
        //! ERROR MESSAGE FOR (USED AMOUNT)
        echo '<script>  alert("Invalid Amount."); </script> ';//add
        exit();
      }
    if($row[1]<$usedamount)
    {
      //! ERROR MESSAGE FOR (USED AMOUNT)
      echo '<script>  alert("The amount used was over the budget."); </script> ';//add
      exit();
    }
    else
    {
     

      if($tin=="")
      {
      }
      else if(!ctype_digit($tin))
      {
        //! ERROR MESSAGE FOR (TIN NUMBER)
        echo '<script>  alert("Invalid TIN Number."); </script> ';//add
        exit();
      }
      if($row[0]==1)
      {
      $query1 = "INSERT INTO op_report (user_name,code,tin,amount,date,time)
      VALUES ('$user_name','$code','$tin','$usedamount','$today ','$time')";
      mysqli_query($conn, $query1);

      $query = "UPDATE requests_tbl SET report='1' WHERE code ='$code'";
      @mysqli_query($conn, $query);
      echo '<script>  alert("Report Sent."); </script> ';//add
      echo '<script>window.location="DepartmentDashboardPage.php";</script>';
      }
      else
      {
        if($row[0]==2)
        {
          //? REMOVE
          echo '<script>  alert("Request was rejected."); </script> ';//add
        }
        else
        {
          //? REMOVE
          echo '<script>  alert("Waiting For Request Status."); </script> ';//add
        }
      }
    }
    }
  }
  else
  {
    //? REMOVE
    echo '<script>  alert("Code thus not exist."); </script> ';//add
  }
}
} 
?>
</div>
</div>
</form>
</body>
</html>

