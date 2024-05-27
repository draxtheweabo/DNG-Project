<?php
session_start();
?>
<html>
<style>
    
body {    
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

.container {
width: 55%;
margin: 10px;
padding: 10px;
text-align: justify;
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
    
.titleheader {
position: absolute;
top: 50px;
left: 660px;
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
top:50px;
left:7%;
   
}
    
.amazing th {
padding-bottom: 1%;
font-family: inter;
text-align: center;
padding-top: 1%;
padding-left:1%;  
color: black;
}

.amazing td {
padding-bottom: 1%;
font-family: inter;
text-align: center;
padding-top: 1%;
padding-left:1%;  
color: black;
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
  
.amazing td:hover {
background-color: #93C572;
font-weight: bold;
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

.amazing td.no-hover:hover {
background-color: initial;
font-weight: normal;
box-shadow: none;
transform: none;
transition: none;  
}

.amazing td.white-text {
    color: white;
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

/*Janro pa usog nalang neto kahit san AHHAHAHH pwd kahit sa taas or sa baba*/
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
.button-container 
{
padding: 10px 15px;
text-align: center ;
}
 /*Janro pa usog nalang neto kahit san AHHAHAHH pwd kahit sa taas or sa baba*/
    
.contents {
position: fixed;
width: 78%;
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
    
</style>

<head>
<title>D&G PACIFIC</title>
</head>

<body>
<form action="DepartmentDashboardPage.php" method="post">


</head>

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
  <h1 style="font-family: inter; font-size: 30px; font-weight: bold; color: #4F4F4F">DASHBOARD  </h1>
</div>
    

<?php
 //Connect to Database
 $username ="root";
 $password="";
 $database="lycorisdb";
 $conn = mysqli_connect("localhost",$username,$password,$database) or die ("Unable to select database"); 
 $user_name = $_SESSION["user"];
 $request=$_SESSION["request"];
 $expense=$_SESSION["expense"];
 $stats=$_SESSION["status"];
 $monthh=date("m");
 //show all defaut
 if ($request=="" && $expense =="" && $stats=="" || $request=="0" && $expense =="0" && $stats=="-1" )
 {
  $query = "SELECT status , code, report FROM requests_tbl WHERE user_name ='$user_name' And MONTH(date)='$monthh'";
 }
 //sort only with request
 else if($expense =="0" && $stats=="-1")
 {
  $query = "SELECT status , code, report FROM requests_tbl WHERE user_name ='$user_name' And request='$request' And MONTH(date)='$monthh'";
 }
 //sort only with expense
 else if($request=="0" && $stats=="-1")
 {
  $query = "SELECT status , code, report FROM requests_tbl WHERE user_name ='$user_name' And type='$expense' And MONTH(date)='$monthh'";
 }
 //sort only with status
 else if ($request=="0" && $expense =="0")
 {
  $query = "SELECT status , code, report FROM requests_tbl WHERE user_name ='$user_name' And status='$stats' And MONTH(date)='$monthh'";
 }
 //sort with request and expense
 else if ($stats=="-1")
 {
  $query = "SELECT status , code, report FROM requests_tbl WHERE user_name ='$user_name' And request='$request' AND type='$expense' And MONTH(date)='$monthh'";
 }
 //sort with request and status
 else if ($expense=="0")
 {
  $query = "SELECT status , code, report FROM requests_tbl WHERE user_name ='$user_name' And request='$request' AND status='$stats' And MONTH(date)='$monthh'";
 }
 //sort with expense and status
 else if ($request=="0")
 {
  $query = "SELECT status , code, report FROM requests_tbl WHERE user_name ='$user_name' And type='$expense' AND status='$stats' And MONTH(date)='$monthh'";
 }
  else
{
  $query = "SELECT status , code, report FROM requests_tbl WHERE user_name ='$user_name' And request='$request'AND type='$expense' AND status='$stats' And MONTH(date)='$monthh'";
}
 $result = @mysqli_query($conn, $query);
?>

<div class="amazing-container">
  <table class="amazing">

    <thead>
      <tr>
        <th class="no-hover">STATUS</th>
        <th class="no-hover">DETAILS</th>
        <th class="no-hover">OPERATION CODE</th>
        <th class="no-hover">Report</th>
      </tr>
    </thead>

    <tbody>
      <?php
      $i = 0;
      while ($row = mysqli_fetch_array($result)) 
      {
        if ($row[0] == 0) 
        {
          $status = "PENDING";
          $color = "F5DEB3";
        } 
        else if ($row[0] == 1) 
        {
          $status = "APPROVED";
          $color = "3EB489";
        } 
        else if ($row[0] == 2) 
        {
          $status = "REJECTED";
          $color = "9A9A9A";
        }

        $code = $row[1];
        echo "<tr>
                <td class='no-hover' style =' background-color: ".$color.";'>$status</td>
                <td style ='background-color: ".$color.";'><input type='submit' name='submit$i' value='DETAILS' style ='color:black;' ></td>
                <td class='no-hover' style =' background-color: ".$color.";'>$row[1]</td>";
                if($status=="APPROVED")
                {
                  if($row[2]==1)
                  {
                    echo"<td style =' background-color: ".$color.";'><input type='submit' name='report$i' value='REPORTED' style ='color:black;' disabled></td>";
                  } 
                  else
                  {
                    echo"<td style =' background-color: ".$color.";'><input type='submit' name='report$i' value='REPORT' style ='color:black;'></td>";
                  }
                }
                else if($status=="REJECTED")
                {
                  echo"<td class='no-hover' style =' background-color: ".$color.";'><input type='submit' name='report$i' value='INVALID' disabled style ='color:black;'></td>";
                }
                else if($status=="PENDING")
                {
                  echo"<td class='no-hover' style =' background-color: ".$color.";'><input type='submit' name='report$i' value='WAITING' disabled style ='color:black;'></td>";
                }
              echo"</tr>";
        if (isset($_POST["report" . $i])) 
        {
          $_SESSION["code"] = $code;
          echo '<script>window.location="DepartmentReportPage.php";</script>';
        }
        if (isset($_POST["submit" . $i])) 
        {
          if ($row[0] == 0) 
          {
            $_SESSION["code"] = $code;
            echo '<script>window.location="DepartmentDashboardDetailsPage.php";</script>';
          } 
          else if ($row[0] == 1) 
          {
            $_SESSION["code"] = $code;
            echo '<script>window.location="ApproveRequestForm.php";</script>';
          } 
          else if ($row[0] == 2) 
          {
            $_SESSION["code"] = $code;
            echo '<script>window.location="DepartmentDashboardDetailsPage.php";</script>';
          }
        }
        $i++;
      }
      ?>
    </tbody>
  </table>
</div>
<div class="contents">
<b>Type of request:</b>
<select name="request" id="request" >
<option value="0" selected hidden>Choose Type of Request</option>
  <option value="1">Replenishment of Revolving Fund</option>
  <option value="2">Reimbursement</option>
  <option value="3">Replenishment of Cash</option>
</select>
&nbsp;
    &nbsp;
    &nbsp;
<b>Expense Type:</b>
<select name="expense" id="expense" >
<option value="0" selected hidden>Choose Expense Type</option>
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
&nbsp;
    &nbsp;
    &nbsp;
<b>Status:</b>
<select name="status" id="status" >
<option value="-1" selected hidden>Choose Request Status</option>
  <option value="0">PENDING</option>
  <option value="1">APPROVED</option>
  <option value="2">REJECTED</option>
</select>

<div class='button-container'>
    <input type='submit' name='Sort' value='Sort' class='button'>
    <input type='submit' name='Clear' value='Clear' class='button'>
    <input type='submit' name='Archive' value='Archive' class='button'>
</div>
<!-- Janro pa usog nalang neto kahit san AHHAHAHH pwd kahit sa taas or sa baba--> 
<?php
 if(isset($_POST["Clear"]))
 {
  $_SESSION["request"] = "";
  $_SESSION["expense"] = "";
  $_SESSION["status"] = "";
  echo '<script>window.location="DepartmentDashboardPage.php";</script>';
 }
 if(isset($_POST["Archive"]))
 {
  $_SESSION["request"] = "";
  $_SESSION["expense"] = "";
  $_SESSION["status"] = "";
  echo '<script>window.location="DepartmentArchivePage.php";</script>';
 }
 if(isset($_POST["Sort"]))
 {
  $request = $_POST['request'];
  $expense = $_POST['expense'];
  $stats = $_POST['status'];
  $_SESSION["request"] = $request;
  $_SESSION["expense"] = $expense;
  $_SESSION["status"] = $stats;
  echo '<script>window.location="DepartmentDashboardPage.php";</script>';
 }
 ?>
</div>
</form>
</body>
</html>

