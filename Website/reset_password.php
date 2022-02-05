<?php
INCLUDE 'dbcon.php';


 if (isset($_POST['submit'])){
  if (isset($_GET['token'])) {
$token=$_GET['token'];

    $newpassword=mysqli_real_escape_string($con,$_POST['password']);
    $cpassword=mysqli_real_escape_string($con,$_POST['password1']);
    $pass=password_hash($newpassword, PASSWORD_BCRYPT);

        if($newpassword ===  $cpassword) {

    $updatequery="UPDATE register set password='$pass' where token='$token'";
$iquery=mysqli_query($con,$updatequery);
if ($iquery) {

$_SESSION['msg']="Your password has been Updated";
header('location:login.php');
}else{
 $_SESSION['passmsg']="Your password is not updated";
 header('location:reset_password.php');
}
   }
   else{
    echo"Password not matching";
   }
 } else{
  echo("No token found");
 }  
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up  </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <script src="https://kit.fontawesome.com/26d4a64054.js " crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>

    <link rel="stylesheet" href="view.css">
</head>

<body id="main_body" >
    
    <img id="top" src="top.png" alt="">
    <div id="form_container">
    
        <h1><a>Address Entry Nepal</a></h1>
        <h2>Recover your account</h2>
            <p>Please enter the details correctly!</p>
            <p><?php if (isset($_SESSION['passmsg'])) {
                echo $_SESSION['passmsg'];
                
            }else{

            echo $_SESSION['passmsg']="";
            } ?></p>
        <form id="form_107299" class="appnitro"  method="post" action="">
                    <div class="form_description">
            
        </div>                      
            <ul >
                    <li id="li_1" >
                     

        <div class="left">
            <label for="element_1_3"><i class="fas fa-lock"></i>  New Password</label>
            <input id="element_1_3" name="password" class="element text large" placeholder="New Password" type="password" required>
                      <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
        </div>
    
        <div class="right">
        <label for="element_1_4"><i class="fas fa-lock"></i>  Confirm Password</label>
            <input id="element_1_4" name="password1" class="element text large" placeholder="Confirm Password" type="password" required>
       
    </div>
    
        <div class="checkbox">
        
    </div>
<div class="left">
                    <li class="buttons">
                <input type="hidden" name="form_id" value="107299" />
           <input type="checkbox" required="" /> I agree all <a href="#" class="term-service">Terms of service</a><br/>
                <br/>
                <br/>
                <input id="saveForm" class="button_text btn-basic" type="submit" name="submit" value="update" />
               
        </li>
        <li>
            <p class="loginhere">
                        Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
        </li>
            </ul>
         </div>    
            
    </div>
    </div>
    </form>
    <img id="bottom" src="bottom.png" alt="">
    </body>

</html>