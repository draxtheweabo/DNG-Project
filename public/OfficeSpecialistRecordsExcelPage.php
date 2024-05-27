<?php
session_start();
?>
<html>
<body>
<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Excel Export.xls");
 //Connect to Database
 $username ="root";
 $password="";
 $database="lycorisdb";
 $month = $_SESSION["month"]; 
$year = date("Y");
 $req=0;
 $used=0;
 $department = $_SESSION["depar"];
 $conn = mysqli_connect("localhost",$username,$password,$database) or die ("Unable to select database"); 
 if ($month=="" && $department=="")
 {   
 $query = "SELECT Department, request, date, client, address, type, particulars, amount, code FROM requests_tbl WHERE report ='1'and YEAR(date)='$year'";}
 else if($month == '0'&& $department=="0")  
{
 $query = "SELECT Department, request, date, client, address, type, particulars, amount, code FROM requests_tbl WHERE report ='1' and YEAR(date)=' $year'";
}
else if($month == '0')
{
  $query = "SELECT Department, request, date, client, address, type, particulars, amount, code FROM requests_tbl WHERE report ='1' and Department='$department' and YEAR(date)=' $year'";
}
else if($department == '0')
{
  $query = "SELECT Department, request, date, client, address, type, particulars, amount, code FROM requests_tbl WHERE report ='1'and MONTH(date)='$month'  and YEAR(date)= '$year' ";
}
else
{
  $query = "SELECT Department, request, date, client, address, type, particulars, amount, code FROM requests_tbl WHERE report ='1' and MONTH(date)='$month' and Department='$department' and YEAR(date)=  '$year' ";
}
$result = @mysqli_query($conn, $query);
?>
<table border="1">
<tr>
    <th bgcolor='#69B262'>DEPARTMENT</th>
    <th bgcolor='#69B262'>TYPE OF REQUEST</th>
    <th bgcolor='#69B262'>DATE</th>
    <th bgcolor='#69B262'>CLIENT NAME</th>
    <th bgcolor='#69B262'>CLIENT ADDRESS</th>
    <th bgcolor='#69B262'>EXPENSE TYPE</th>
    <th bgcolor='#69B262'>PARTICULARS</th>
    <th bgcolor='#69B262'>AMOUNT</th>
    <th bgcolor='#69B262'>OPPERATION CODE</th>
    <th bgcolor='#69B262'>USED AMOUNT</th>
    <th bgcolor='#69B262'>TIN No.</th>
</tr>
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
    
    </tr>";
    $req=$req+$row[7];
    $used=$used+$row1[0];
    $i++;
}
echo"<br><b>Total Requested Amount: ".number_format($req,2)."</b>";
echo"<br><b>Total Used Amount: ".number_format($used,2)."</b>";
?>
</tbody>
</br>
<?php
if($month == ''||$month == '0' || $department=="" || $department=="0")  
{
  echo"<br><b>Please Specify Department and Month To Print the Graph</b>";
  echo '<script>window.location="OfficeSpecialistRecordsPageArchive.php";</script>';
  exit();
}
?>
<table border="1">
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
    <th></th>
    <th bgcolor='#69B262'>Meals</th>
    <th bgcolor='#69B262'>Commute</th>
    <th bgcolor='#69B262'>Communication</th>
    <th bgcolor='#69B262'>Parking</th>
    <th bgcolor='#69B262'>Gas</th>
    <th bgcolor='#69B262'>R&M</th>
    <th bgcolor='#69B262'>Manpower</th>
    <th bgcolor='#69B262'>Equipment</th>
    <th bgcolor='#69B262'>Barracks</th>
    <th bgcolor='#69B262'>Office Suplies</th>
    <th bgcolor='#69B262'>Ins & Reg</th>
    <th bgcolor='#69B262'>Others</th>
</tr>
<tbody>
<?php 
  $ctr=1;
  $department =$_SESSION["depar"];
  $month = $_SESSION["month"];
  $year = $_SESSION["year"];
  
  $Meals = 0;
  $Commute = 0;
  $Communication = 0;
  $Parking = 0;
  $Gas = 0;
  $RM = 0;
  $Manpower = 0;
  $Equipment = 0;
  $Barracks = 0;
  $OfficeSup = 0;
  $InsReg = 0;
  $Others = 0;

  $arrAmount[] = array();
  $query = "SELECT type,code FROM requests_tbl WHERE report='1' and Department='$department' and MONTH(date)='$month'  and YEAR(date)= '$year'";
  $result = @mysqli_query($conn, $query);
  
    while($row = mysqli_fetch_array($result))
    {
    $query1 = "SELECT amount FROM op_report WHERE code='$row[1]'";
    $result1 = @mysqli_query($conn, $query1);
    while($row1 = mysqli_fetch_array($result1))
    {
    if($row[0]==1){$arrAmount[0] = $Meals = $Meals+$row1[0];}
    else if($row[0]==2){$arrAmount[1] =  $Commute = $Commute+$row1[0];}
    else if($row[0]==3){$arrAmount[2] =  $Communication = $Communication+$row1[0];}
    else if($row[0]==4){$arrAmount[3] =  $Parking = $Parking+$row1[0];}
    else if($row[0]==5){$arrAmount[4] =  $Gas = $Gas+$row1[0];}
    else if($row[0]==6){$arrAmount[5] =  $RM = $RM+$row1[0];}
    else if($row[0]==7){$arrAmount[6] =  $Manpower = $Manpower+$row1[0];}
    else if($row[0]==8){$arrAmount[7] =  $Equipment = $Equipment+$row1[0];}
    else if($row[0]==9){$arrAmount[8] = $Barracks = $Barracks+$row1[0];}
    else if($row[0]==10){$arrAmount[9] = $OfficeSup = $OfficeSup+$row1[0];}
    else if($row[0]==11){$arrAmount[10] =  $InsReg = $InsReg+$row1[0];}
    else if($row[0]==12){$arrAmount[11] =  $Others = $Others+$row1[0];}
    }
  }
    rsort($arrAmount);
    $temp=$arrAmount[0];

  while($ctr<12)
  {
    if ($ctr==1)
    {$temp = $arrAmount[0];}
    else if ($ctr>2&&$ctr<4)
    {
    $fix=$temp/11;
    $temp=$temp-number_format($fix,0);
    }
    else
    {
      $fix=$temp/4;
      $temp=$temp-number_format($fix,0);}
    if ($ctr==11)
    {$temp = 0;}

?>
<td><?php echo number_format($temp,0);?></td>
<?php
if ($temp>$Meals)
{
  $color1="#ffffff";
}
else if ($temp<=$Meals)
{
  $color1="#a6cee3";
}
//
if ($temp>=$Commute)
{
  $color2="#ffffff";
}
else
{
  $color2="#1f78b4";
}
//
if ($temp>=$Communication)
{
  $color3="#ffffff";
}
else
{
  $color3="#b2df8a";
}
//
if ($temp>=$Parking)
{
  $color4="#ffffff";
}
else
{
  $color4="#fb9a99";
}
//
if ($temp>=$Gas)
{
  $color5="#ffffff";
}
else
{
  $color5="#e31a1c";
}
//
if ($temp>=$RM)
{
  $color6="#ffffff";
}
else
{
  $color6="#fdbf6f";
}
//
//
if ($temp>=$Manpower)
{
  $color7="#ffffff";
}
else
{
  $color7="#ff7f00";
}
//
//
if ($temp>=$Equipment)
{
  $color8="#ffffff";
}
else
{
  $color8="#cab2d6";
}
//
//
if ($temp>=$Barracks)
{
  $color9="#ffffff";
}
else
{
  $color9="#6a3d9a";
}
//
//
if ($temp>=$OfficeSup)
{
  $color10="#ffffff";
}
else
{
  $color10="#ffff99";
}
//
//
if ($temp>=$InsReg)
{
  $color11="#ffffff";
}
else
{
  $color11="#b15928";
}
//
//
if ($temp>=$Others)
{
  $color12="#ffffff";
}
else
{
  $color12="#c54c08";
}
//
?>
<td bgcolor='<?php echo $color1;?>'></td>
<td bgcolor='<?php echo $color2;?>'></td>
<td bgcolor='<?php echo $color3;?>'></td>
<td bgcolor='<?php echo $color4;?>'></td>
<td bgcolor='<?php echo $color5;?>'></td>
<td bgcolor='<?php echo $color6;?>'></td>
<td bgcolor='<?php echo $color7;?>'></td>
<td bgcolor='<?php echo $color8;?>'></td>
<td bgcolor='<?php echo $color9;?>'></td>
<td bgcolor='<?php echo $color10;?>'></td>
<td bgcolor='<?php echo $color11;?>'></td>
<td bgcolor='<?php echo $color12;?>'></td>
</tr>
<?php 
$ctr++; 
}
echo'<script> window.location="Office Specialist Records Page.php"; </script> ';
?>
</tbody>
</table>
</body>
</html>