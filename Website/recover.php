<?php
INCLUDE 'dbcon.php';

 if (isset($_POST['submit'])){
    $email=mysqli_real_escape_string($con,$_POST['email']);
  
  // $sql="SELECT count(email) AS emailcount FROM register";
  // $result=mysqli_query($con,$sql);
  // $values=mysqli_fetch_assoc($result);
  // $num_rows=$values['emailcount'];
  
  $sql= " SELECT * FROM register WHERE email='$email'";
$query= mysqli_query($con,$sql);
$email_count=mysqli_num_rows($query);
$values=mysqli_fetch_assoc($query);

// $username= $values['username'];
//     $token= $values['token']; 

    if($email_count>0 ){ 
    $username= $values['username'];
    $token= $values['token']; 
    echo("$username $token");

$subject = "Password Reset";
$body = "Hi $username , this is a Recovery email http://localhost/project/reset_password.php?token=$token";
$headers = "From: diwas.kuwar@gmail.com";
if(mail($email,$subject,$body,$headers)){
    $_SESSION['msg']="Check your mail to recover password";
                  echo("check to reover your account ");
                   header("Refresh:2;url=login.php");
               }
             
               else{
    echo("Email send failed"); 
     header("Refresh:1;url=index.html");

}
}else{
    echo("No email found");
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In </title>
    <script src="https://kit.fontawesome.com/26d4a64054.js " crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    

    <link rel="stylesheet" href="view.css">
</head>

<body id="main_body" >
    
    <img id="top" src="top.png" alt="">
    <div id="form_container">
     <div>

                        </div>
        <form id="form_107299" class="appnitro"  method="post" action="">
                    <div class="form_description">
            <h2>Recover Account</h2>
            <p>Please enter the email correctly!</p>
        </div>                      
            <ul >
                    <li id="li_1" >
                          <p class=""bg-success text-white px-4><?php
                             if(isset($_SESSION['msg'])){
                             echo $_SESSION['msg']; 
                            }else{
                             echo $_SESSION['msg']=" "; 

                        }     
                             ?>
                        
                             </p>
                      <div>
            <label for="element_1_1"><i class="far fa-envelope"> </i>  Email</label>
            <input id="element_1_1" name="email" class="element text large" placeholder="yourgmail@mail.com" type="text"  required>
            
        </div>
    
       
    
        
                    <li class="buttons">
                <input id="saveForm" class="button_text btn-primary" type="submit" name="submit" value="Login" />
        </li>
        <li>
           
            <p class="loginhere">

                        Register an account ? <a href="index.html" class="loginhere-link">Signup here</a>
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