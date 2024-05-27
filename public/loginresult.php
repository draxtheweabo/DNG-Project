
<?php
//if Submit
if (isset($_GET['submit']))
{
  //Connect to Database
  $username ="root";
  $password="";
  $database="lycorisdb";
  $conn = mysqli_connect("localhost",$username,$password,$database) or die ("Unable to select database"); 
  
  //Get inputted user and pass
  $user_name = $_GET['user'];
  $pass = $_GET['pass'];
  
  //Put user and pass in universal variable
  $_SESSION["user"] = $user_name;
  $_SESSION["pass"] = $pass;

  //fetch database account for department
  $query = "SELECT email,pass FROM lyco_account WHERE user_name ='$user_name' AND pass = '$pass'";
  $result = @mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);

  //Check if inputted was empty
  if(!empty($_GET['user']) || !empty($_GET['pass']))
  {
    if($row)
    {
      //Go to Office Specialist
      if ($row['0'] == 'OSfabellon@gmail.com')
      {
          $username ="root";
          $password="";
          $database="lycorisdb";
          $year=date("Y");
          $conn = mysqli_connect("localhost",$username,$password,$database) or die ("Unable to select database"); 
          $query = "INSERT into archive select * from requests_tbl where YEAR(DATE) < $year";
          mysqli_query($conn, $query);
          $query = "DELETE FROM requests_tbl WHERE YEAR(DATE) < $year";
          mysqli_query($conn, $query);
          $_SESSION["month"] = "0";
          $_SESSION["department"] = "";//add
          $_SESSION["depart"] = "";
          $_SESSION["depar"] = "0";
          $_SESSION["year"] = "0";
          echo'<script> window.location="OfficeSpecialistHomePage.php"; </script> ';
        exit();
          
      }
      //Go to Department
      else
      {
        $_SESSION["request"] = "";//add
        $_SESSION["expense"] = "";//add
        $_SESSION["status"] = "";//add
       echo'<script> window.location="DepartmentHomePage.php"; </script> ';
        exit();
      }
      }
      else
      {
        //! ERROR MESSAGE FOR (WRONG USERNAME AND PASS)
        echo '<script>  alert("Username or Password are Incorrect"); </script> ';//add
      }
  }
  mysqli_close($conn);
}
?>