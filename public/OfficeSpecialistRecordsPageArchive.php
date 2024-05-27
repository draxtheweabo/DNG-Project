<?php
session_start();
?>
<html>
<style>
body {
background-color:;
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
top: 290px;
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
left: 690px;
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
text-align: center;
color: #185875;
}

 .amazing td {
font-weight: normal;
font-size: 10;
}

.amazing {
text-align: center;
overflow: hidden;
width: 85%;
display: table;
margin: 70 auto;
padding: 0 0 8em 0;
}
    
.amazing-container {
position: relative;
top:30px;
left:7%;   
}
    
 .amazing td, .amazing th {
padding-bottom: 10px;
font-family: inter;
text-align: center;
padding-top: 10px;
padding-left: 15px;
padding-right: 15px;
}

.amazing tbody {
padding: 0;
}

.amazing tr:nth-child(odd) {
    background-color: #93E9BEff;
}

.amazing tr:nth-child(even) {
    background-color: #93E9BEff;
}

.amazing th {
    background-color: #BEBEBE;
}

.amazing tr:hover {
background-color: #D7FED7;

}

.small-font {
font-size: 12px;
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
<title>Office Specialist Records Page</title>
</head>

<body>
<form action="OfficeSpecialistRecordsPageArchive.php" method="post">
<div align="center">
<b>Office Specialist Records Page</b>
</div>

</head>
<body>

    <div class="titleheader">
  <h1 style="font-family: inter; font-size: 30px; font-weight: bold; color: #4F4F4F">RECORDS</h1>
</div>
    

<div class="topnav">
    <img src="Assets/DGLOGO.png" width="250px" height="auto" style="margin-left: 5px; margin-top: 9px;">
  <a i class="fa fa-power-off" href="index.php" style="font-family: inter; font-size: 16px; font-weight: bold; "></i><img src="Assets/navicons/power.png" alt="Power Button">  Logout</a>
</div>
    
<div class="sidenav">
  <a href="OfficeSpecialistHomePage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/home.png" alt="Home Icon"> Home</a>
    
  <a href="OfficeSpecialistRequestPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/request.png" alt="Request Icon"> Queue</a>
  <a href="OfficeSpecialistApprovedRequestPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/request.png" alt="Request Icon"> Approved Requests</a>
  <a href="OfficeSpecialistOperationReportsPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/operation.png" alt="Operation Report Icon"> Catalogs</a>
    
  <a class="active" href="OfficeSpecialistRecordsPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/activereport.png" alt="Records Icon"> Records</a>
    
  <a href="OfficeSpecialistCreationPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/acc.png" alt="Account creation Icon"> Acc & Dep Creation</a>
    
  <a href="OfficeSpecialistForgotPasswordPage.php" style="font-family: inter; font-size: 16px; font-weight: bold;" ><img src="Assets/navicons/pass.png" alt="Account creation Icon"> Forgot Password</a>
 </div>       
<!--<div class="ads">
<a href="https://www.leagueoflegends.com/en-ph/" target="_blank"><img src="Assets/ads.png" alt="ads"></a>
</div>-->

<?php
 //Connect to Database
 $username ="root";
 $password="";
 $database="lycorisdb";
 $month = $_SESSION["month"];
 $year = $_SESSION["year"];
 $department =$_SESSION["depar"];
 $req=0;
 $used=0;
 $conn = mysqli_connect("localhost",$username,$password,$database) or die ("Unable to select database"); 
 // * no month, department, year
 if ($month=="" && $department==""&&$year=="")
 {   
 $query = "SELECT Department, request, date, client, address, type, particulars, amount, code FROM archive WHERE report ='1'";}
  // * no month, department, year
 else if($month == '0'&& $department=="0"&&$year=="0")  
{
 $query = "SELECT Department, request, date, client, address, type, particulars, amount, code FROM archive WHERE report ='1'";
}
else if($month == '0'&& $department=="0")  
{
 $query = "SELECT Department, request, date, client, address, type, particulars, amount, code FROM archive WHERE report ='1' and YEAR(date)=' $year'";
}
else if($month == '0'&&$year=="0")  
{
 $query = "SELECT Department, request, date, client, address, type, particulars, amount, code FROM archive WHERE report ='1'and Department='$department'";
}
else if($department=="0"&&$year=="0")  
{
 $query = "SELECT Department, request, date, client, address, type, particulars, amount, code FROM archive WHERE report ='1'and MONTH(date)='$month'";
}
 // * no month
else if($month == '0')
{
  $query = "SELECT Department, request, date, client, address, type, particulars, amount, code FROM archive WHERE report ='1' and Department='$department' and YEAR(date)=' $year'";
}
 // * no department
else if($department == '0')
{
  $query = "SELECT Department, request, date, client, address, type, particulars, amount, code FROM archive WHERE report ='1'and MONTH(date)='$month'  and YEAR(date)= '$year' ";
}
 // * no year
else if($year == '0')
{
  $query = "SELECT Department, request, date, client, address, type, particulars, amount, code FROM archive WHERE report ='1'and MONTH(date)='$month'  and  Department='$department'";
}
 // * all sorted
else
{
  $query = "SELECT Department, request, date, client, address, type, particulars, amount, code FROM archive WHERE report ='1' and MONTH(date)='$month' and Department='$department' and YEAR(date)=  '$year' ";
}
$result = @mysqli_query($conn, $query);
?>

<div class="amazing-container">
<table class="amazing">
    <thead>
        <tr>
            <th class="small-font">DEPARTMENT</th>
            <th class="small-font">TYPE OF REQUEST</th>
            <th class="small-font">DATE</th>
            <th class="small-font">CLIENT NAME</th>
            <th class="small-font">CLIENT ADDRESS</th>
            <th class="small-font">EXPENSE TYPE</th>
            <th class="small-font">PARTICULARS</th>
            <th class="small-font">AMOUNT</th>
            <th class="small-font">OPPERATION CODE</th>
            <th class="small-font">USED AMOUNT</th>
            <th class="small-font">TIN No.</th>
        </tr>
    </thead>
    
    <tbody>
      <?php
      $i=0;
      while ($row = mysqli_fetch_array($result))
      {
        if($row[1] == 1){$type="Replenishment of Revolving Fund";}
        else if ($row[1] == 2){$type="Reimbursement";}
        else if ($row[1] == 3){$type="Replenishment of Cash";}
        
        if($row[5]==1){$expense ="Meals";}
        else if($row[5]==2){$expense ="Commute";}
        else if($row[5]==3){$expense ="Communication";}
        else if($row[5]==4){$expense ="Parking";}
        else if($row[5]==5){$expense ="Gas";}
        else if($row[5]==6){$expense ="R&M";}
        else if($row[5]==7){$expense ="Manpower";}
        else if($row[5]==8){$expense ="Equipment";}
        else if($row[5]==9){$expense ="Barracks";}
        else if($row[5]==10){$expense ="Office Suplies";}
        else if($row[5]==11){$expense ="Ins & Reg";}
        else if($row[5]==12){$expense ="Others";}
        $query1 = "SELECT amount, tin FROM op_report WHERE code ='$row[8]'";
        $result1 = @mysqli_query($conn, $query1);
        $row1 = mysqli_fetch_array($result1);
        echo"
        <tr>
        <td>$row[0]</td>
        <td>$type</td>
        <td>$row[2]</td>
        <td>".ucwords($row[3])."</td>
        <td>".ucwords($row[4])."</td>
        <td>$expense</td>
        <td>".ucwords($row[6])."</td>
        <td>".number_format($row[7],2)."</td>
        <td>$row[8]</td>
        <td>".number_format($row1[0],2)."</td>
        <td>$row1[1]</td>
        <tr>";
        $req=$req+$row[7];
        $used=$used+$row1[0];
        $i++;
      }
      ?>
    </tbody>
</table>

</div>
<!-- Janro pa usog nalang neto kahit san AHHAHAHH pwd kahit sa taas or sa baba-->
<div class="contents">
<?php
echo"<br><b>Total Requested Amount: ".number_format($req,2)."</b>&nbsp;&nbsp;&nbsp;&nbsp;";
echo"<b>Total Used Amount: ".number_format($used,2)."</b><br>";
?>
<input type='submit' name='Back' value='Back' class ='button'>
<input type='submit' name='excel' value='Export Excel File' class ='button'>
    &nbsp;

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
&nbsp;

<b>Month:</b>
<select name="month" id="month" >
<option value="0" selected hidden>Choose Month</option>
  <option value="1">January</option>
  <option value="2">February</option>
  <option value="3">March</option>
  <option value="4">April</option>
  <option value="5">May</option>
  <option value="6">June</option>
  <option value="7">July</option>
  <option value="8">August</option>
  <option value="9">September</option>
  <option value="10">October</option>
  <option value="11">November</option>
  <option value="12">December</option>
</select>
    &nbsp;

    <b>Year:</b>
<select name="year" id="year" >
<option value="0" selected hidden>Choose Year</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
</select>
    &nbsp;

<input type='submit' name='Sort' value='Sort' class='button'>
<input type='submit' name='Clear' value='Clear' class='button'>
<input type='submit' name='Graph' value='Show Graph' class ='button'>
<!-- Janro pa usog nalang neto kahit san AHHAHAHH pwd kahit sa taas or sa baba-->

<?php
 if(isset($_POST["excel"]))
 {
  echo'<script> window.location="OfficeSpecialistRecordsExcelPageArchive.php"; </script> ';
 }
 if(isset($_POST["Sort"]))
 {
  $year = $_POST['year'];
  $month = $_POST['month'];
  $department = $_POST['department'];
  $_SESSION["year"] = $year;
  $_SESSION["depar"] = $department;
  $_SESSION["month"] = $month;
  echo'<script> window.location="OfficeSpecialistRecordsPageArchive.php"; </script> ';
 }
 if(isset($_POST["Clear"]))
 {
  $_SESSION["year"] = "0";
  $_SESSION["month"] = "0";
  $_SESSION["depar"] ="0";
  echo '<script>window.location="OfficeSpecialistRecordsPageArchive.php";</script>';
 }
 if(isset($_POST["Back"]))
 {
  $_SESSION["year"] = "0";
  $_SESSION["month"] = "0";
  $_SESSION["depar"] ="0";
  echo '<script>window.location="OfficeSpecialistRecordsPage.php";</script>';
 } 
  if(isset($_POST["Graph"]))
  {
    $year = $_SESSION['year'];
    $month = $_SESSION['month'];
    $department = $_SESSION['depar'];
    if($month == ''||$month == '0' || $department=="" || $department=="0"  || $year==""||$year=="0")  
    {
      echo '<script>  alert("Please Specify Graph by Sorting all Department, Month, Year."); </script> ';
      echo '<script>window.location="OfficeSpecialistRecordsPageArchive.php";</script>';
    }
    else
    {
      echo '<script>window.location="SystemGraph.php";</script>';
    }
  } 
?>
</form>
</body>
</html>