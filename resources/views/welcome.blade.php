<?php
session_start();
?>

<style>
    
body, html {
margin: 0;
padding: 0;
}
    
body{
width: 100%;
height: calc(100%);
}
    
main#main{
width:100%;
height: calc(100%);
background:white;
}
    
#login-right{
position: absolute;
right:0;
width:40%;
height: 100%;
background:white;
display: flex;
align-items: center;
}
    
#login-left{
position: absolute;
left:0;
width:60%;
height: calc(100%);
background:#59b6ec61;
display: flex;
align-items: center;
background: url("Assets/TITE.jpg");
background-repeat: no-repeat;
background-size: cover;
background-position: 65% center;
}
    
#login-right .card{
top: 10%;
margin: auto;
z-index: 1;
}
    
.logo {
margin: auto;
font-size: 8rem;
background: white;
padding: .5em 0.7em;
border-radius: 50% 50%;
color: #000000b3;
z-index: 10;
}
    
div#login-right::before {
content: "";
position: absolute;
top: 0;
left: 0;
width: calc(100%);
height: calc(100%);
background: #FFFFFF ;
}

.header-container {
position: absolute;
top: 15%;
left: 50%;
transform: translateX(-50%);
text-align: center;
}

.header-container img {
width: 350px;
height: auto;
}
    
.button-container {
display: flex;
justify-content: center;
margin-top: 20px;
}

.forgotpass {
position: fixed;
width: 28%;
height: 10%;
font-size: 16px;
text-decoration: none;
color: black;
text-align: center; 
font-family: inter;
border-radius: 8px;
top: 90%;
left: 80%;
transform: translate(-50%, -50%); 
}
    
.forgotpass a {
color: inherit;
text-decoration: none;
}   
    
.card {
  padding-bottom: 15px;
}

.contents {
position: fixed;
width: 28%;
height: 45%;
padding :15px;
backdrop-filter: blur(5px) brightness(1.2);
background-color: rgba(255, 255, 255, 0.2);
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
color: black;
text-align: left; 
font-family: inter;
border-radius: 8px;
top: 58%;
left: 80%;
transform: translate(-50%, -50%);    
} 
    
.contents2{
text-align:center;
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
    
</style>

<head>
<title>D&G PACIFIC</title>
</head>



<body>
<form action="index.php" method="get">
    
  <main id="main" class="bg-dark">
    <div id="login-left"></div>
    <div id="login-right">
      <div class="header-container">
        <img src= "https://static.wixstatic.com/media/0719a7_1a725cd51e754487b435f0c6f48a9982~mv2.png/v1/crop/x_180,y_287,w_2257,h_603/fill/w_400,h_108,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/0719a7_1a725cd51e754487b435f0c6f48a9982~mv2.png" alt="Header Image">
      </div>
      <div class="card col-md-8">
        <div class="contents">
  
          <h2 style="text-align: center">WELCOME!</h2>
            
          <div class="contents2">
		  <h7> Log in to your account</h7>
          </div>
            
          <form id="login-form">
			<br>
            <div class="form-group">
              <label for="user" class="control-label">Username</label>
              <br>
              <input type="text" size=49 maxlength=20 name="user" required/> 
            </div>
            <br>
            <div class="form-group">
              <label for="pass" class="control-label">Password</label>
              <input type="Password" size=49 maxlength=20 name="pass" required/> 
              </div>
              
            <center> 
            <div class="button-container">
            <input type="submit" name="submit" value="Log In"  class="button"> &nbsp &nbsp 
            <input type="reset" name="clear" value="Clear" class="button" >
            </div>
                
            </center>
          </form>
        </div>
          <br>
          <br>
          <br>
          <br>
         <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
         </div> 
		
      
    
</main>
 

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

</body>


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
</form>
</body>
</html>



