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
    
.sidenav a:hover {
background-color: #BCFCBC;
coLor: #000;
}

.sidenav a.active {
background-color: #303030;
color: white;
}

    
.titleheader {
position: absolute;
top: 55px;
left: 650px;
}

/* 4 Icons */
 
.contents {
position: fixed;
width: 28%;
height: 88%;
padding : 20px;
backdrop-filter: blur(5px) brightness(1.2);
background-color: rgba(255, 255, 255, 0.2);
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
color: black;
text-align: left;
font-family: inter;
border-radius: 8px;
top: 65%; 
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

.button:hover 
{
background-color: #cccccc;
coLor: #000;
}
    
.button-container {
    text-align: center;
}
    
/* Nilagyan ko neto ksi nagagalaw ung textbox AHAHAHA */   
#particulars {
  resize: none;
}
    
#type {
  width: 94%;
}
   
#divText {
  width: 76%;
}
    
#datepre {
  width: 82%;
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
    
</style>
<script src="change.js"></script>
<head>
<title>Request Page</title>
</head>

<body>
<form action="DepartmentRequestPage.php" method="post">

<!--<div class="ads">
<a href="https://www.leagueoflegends.com/en-ph/" target="_blank"><img src="Assets/ads.png" alt="ads"></a>
</div>-->

<body>
<div class="topnav">
    <img src="Assets/DGLOGO.png" width="250px" height="auto" style="margin-left: 5px; margin-top: 9px;">
  <a i class="fa fa-power-off" href="index.php" style="font-family: inter; font-size: 16px; font-weight: bold;"></i><img src="Assets/navicons/power.png" alt="Power Button">  Logout</a>
</div>

<div class="sidenav">

  <a href="DepartmentHomePage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/home.png" alt="Home Icon">  Home</a>
    
  <a class="active" href="DepartmentRequestPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;"><img src="Assets/navicons/activerequest.png" alt="Request Icon">  Request</a>
    
  <a href="DepartmentDashboardPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;"><img src="Assets/navicons/dashboard.png" alt="Dashboard Icon">  Dashboard</a>
        
</div>

<div class="titleheader">
  <h1 style="font-family: inter; font-size: 30px; font-weight: bold; color: #4F4F4F">REQUEST FORM</h1>
</div>
    
<br>
<br>
<div class="contents">
<b>Type of Request:</b>
<select name="request" id="request" required>
<option value="" selected disabled hidden>Choose here</option>
  <option value="1">Replenishment of Revolving Fund</option>
  <option value="2">Reimbursement</option>
  <option value="3">Replenishment of Cash</option>
</select>

<br>
<br>

<b>Name Of Requestor:</b>
<input type="text" size=23 maxlength=30 name="requestor" required/> 

<br>
<br>

<b>Date:</b>
<input type="date" id="datepre" name="date" min="<?php echo date("Y-m-d"); ?>" required/> 

<br>
<br>

<b>Client Name:</b>
<input type="text" size=31 maxlength=30 name="client" required/> 

<br>
<br>

<b>Client Address:</b>
<input type="text" size=28 minlength="5" maxlength=30 name="address" required/> 

<br>
<br>

<b>Expense Type:</b>
<select name="type" id="type" onchange="changeSelect()" required>
<option value="" selected hidden>Choose here</option>
<option value="1">Meals</option>
<option value="2">Commute</option>
<option value="3">Communication</option>
<option value="4">Parking</option>
<option value="5">Gas</option>
<option value="6">R&M</option>
<option value="7">Manpower</option>
<option value="8">Equipment</option>
<option value="9">Barracks</option>
<option value="10">Office Suplies</option>
<option value="11">Ins & Reg</option>
<option value="12">Others</option>
</select>

<br>
<br>

<b>Particulars:</b>
<br>
<textarea id="particulars" minlength="2" name="particulars" rows="4" cols="46" required></textarea>

<br>
<br>

<b>Max Amount:</b>
<input type="text" id="ddd" name ="limit" readonly disabled>
<br>
<br>
<b>Input Amount:</b>
<input type="text" id="dddd" name ="amount" required>
<br>
<br>
<div class="button-container">
      <input type="submit" onclick="myFunction()" name="submit" value="SUBMIT" class="button">
</div>
<br> 
<br>
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
  date_default_timezone_set('Asia/Manila');
  $today=date("Y-m-d");
  $time=date("h:i:sa");
  $user_name = $_SESSION["user"];
  
  //Get input
  $request = $_POST['request'];
  $requestor = $_POST['requestor'];
  $date = $_POST['date'];
  $client = $_POST['client'];
  $address = $_POST['address'];
  $type = $_POST['type'];
  $particulars = $_POST['particulars'];
  $amount = $_POST['amount'];
  $inc=1;

  if(!ctype_alpha(str_replace(' ', '',$requestor)))
  {
    //! ERROR MESSAGE FOR (REQUESTOR NAME)
    echo '<script>  alert("Invalid Requestor Name"); </script> ';
    exit();
  }
  else if (!ctype_alpha(str_replace(' ', '',$client)))
  {
    //! ERROR MESSAGE FOR (CLIENTS NAME)
    echo '<script>  alert("Invalid Clients Name"); </script> ';
    exit();
  }
  else if(ctype_alpha($amount))
  {
    //! ERROR MESSAGE FOR (AMOUNT)
    echo '<script>  alert("Invalid Amount"); </script> ';
    exit();
  }

  if ( $type  == "1")
  {
      $max = "4000";
  }
  else if ($type == "2")
  {
      $max= "2000";
  }
  else if ($type == "3")
  {
      $max= "350";
  }
  else if ($type == "4")
  {
      $max= "1000";
  }
  else if ($type == "5")
  {
      $max= "1500";
  }
  else if ($type == "6")
  {
      $max= "5000";
  }
  else if ($type == "7")
  {
      $max= "4000";
  }
  else if ($type == "8")
  {
      $max= "7000";
  }
  else if ($type == "9")
  {
      $max= "1000";
  }
  else if ($type == "10")
  {
      $max= "1000";
  }
  else if ($type == "11")
  {
      $max= "5500";
  }
  else if ($type == "12")
  {
      $max= "1500";
  }
  else
  {
      $max = "0";
      $amount = "0";
  }


  if ($amount>$max)
  {
    echo '<script>  alert("Over The Max Amount."); </script> ';//add
    exit();
  }
  if ($amount<=0)
  {
    echo '<script>  alert("Invalid Amount."); </script> ';//add
    exit();
  }
  
  //random code generator
  function generateRandomCode($inc) 
  {
    //db
    $username ="root";
    $password="";
    $database="lycorisdb";
    $conn = mysqli_connect("localhost",$username,$password,$database) or die ("Unable to select database");

    date_default_timezone_set('Asia/Manila');
    $DTd = date("d");
    $DTm = date("m");
    $DTy = date("Y");

    $user_name = $_SESSION["user"];
    $query = "SELECT department FROM lyco_account WHERE user_name ='$user_name'";
    $result = @mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    $query = "SELECT num FROM departments WHERE name ='$row[0]'";
    $result = @mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    if ($inc<10)
    {
        $gen="000".$inc;
    }
    else if($inc<100)
    {
        $gen="00".$inc;
    }
    else if($inc<1000)
    {
        $gen="0".$inc;
    }
    $code ="DEP".$row[0].$DTy.$DTm.$DTd.$gen;
    return $code;
  }
  //check if code already exist
  function codeExists($conn, $code) 
  {
    $sql = "SELECT * FROM requests_tbl WHERE code = '$code'";
    $result = $conn->query($sql);
    return $result->num_rows > 0;
  }
  do 
  {
    $randomCode = generateRandomCode($inc);
    $inc++;
  }
  while (codeExists($conn, $randomCode));

  $query = "SELECT department FROM lyco_account WHERE user_name ='$user_name'";
  $result = @mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
/*
  $query1 = "INSERT INTO requests_tbl (user_name,Department,request,requestor,date,time,client,address,type,particulars,amount,status,code)
  VALUES ('$user_name','$row[0]','$request','$requestor ','$date','$time','$client','$address','$type','$particulars','$amount','0','$randomCode')";
  mysqli_query($conn, $query1);
  echo '<script>  alert("Request has been sent. Please wait for about 10-20 mins."); </script> ';//add
*/
  include_once("Controller.php");
  $AccCTR = new Controller();
  $department=$row[0];
  $status=0;
  $AccCTR->makeReq($user_name,$department,$request,$requestor ,$date,$time,$client,$address,$type,$particulars,$amount,$status,$randomCode);
  
}
}  
?>
</div>
</form>
</body>
</html>

