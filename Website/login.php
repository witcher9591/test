<?PHP
SESSION_START();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In </title>
    <script src="https://kit.fontawesome.com/26d4a64054.js " crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    

    <link rel="stylesheet" href="style.css">
</head>

<body id="main_body" >
    
    <img id="top" src="top.png" alt="">
    <div id="form_container">
     <div>

                        </div>
        <form id="form_107299" class="appnitro"  method="post" action="log.php">
                    <div class="form_description">
            <h2>Login account</h2>
            <p>Please enter the details correctly!</p>
        </div>                      
            <ul >
                    <li id="li_1" >
                        <p class=""bg-success text-white px-4><?php
                             if(isset($_SESSION['msg'])){
                             echo $_SESSION['msg']; 
                            }else{
                             echo $_SESSION['msg']="You are logged out. Please login again "; 

                        }     
                             ?>
                        
                             </p>
                      <div>
            <label for="element_1_1"><i class="far fa-envelope"> </i> Email</label>
            <input id="element_1_1" name="email" class="element text large" placeholder="yourgmail@mail.com" type="text"  required>
            
        </div>
    
       
    
        <div class="left">
            <label for="element_1_3"><i class="fas fa-lock"></i>  Password</label>
            <input id="element_1_3" name="password" class="element text large" placeholder="password" type="password" required>
                      <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
        </div>
    
<div class="left">
                    <li class="buttons">
                <input id="saveForm" class="button_text btn-basic" type="submit" name="submit" value="Login" />
        </li>
        <li>
            <p class="forgotpw">
                forgot your password?<a href="recover.php" class="forgotpw-link">Click here</a>
            </p>
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