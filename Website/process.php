<?php
INCLUDE 'dbcon.php';

 if (isset($_POST['submit'])){
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $password1=mysqli_real_escape_string($con,$_POST['password1']);
    $contact=mysqli_real_escape_string($con,$_POST['contact']);

    $pass=password_hash($password, PASSWORD_BCRYPT);

      
    $token=bin2hex(random_bytes(15));

  
  $sql="SELECT count(email) AS emailcount FROM register";
  $result=mysqli_query($con,$sql);
  $values=mysqli_fetch_assoc($result);
  $num_rows=$values['emailcount'];
  
    if($num_rows>0 ){ 
    echo("aldready exists");
     header("Refresh:1;url=index.html");
    }
     else{
        if($password ===  $password1) {
            $insertquery=  "INSERT INTO register (username,email,password,contact,token,status) VALUES ('$username','$email','$pass','$contact','$token','inactive')";
         $iquery=(!mysqli_query($con,$insertquery));
         if(!$iquery){
$subject = "Testing PHP Mail";
$body = "Hi $username , this is a verification email http://localhost/form/activate.php?token=$token";
$headers = "From: diwas.kuwar@gmail.com";
if(mail($email,$subject,$body,$headers)){
                  echo("check to activate your account ");
    $_SESSION['msg']="Check your mail to recover password";
                  
                   header("Refresh:2;url=login.php");
               }
             
               else{
    echo("Email send failed"); 
     header("Refresh:1;url=index.html");
 }
}

   else{
    echo("not inserted");
     header("Refresh:1;url=index.html");

   }

}else{
echo("password not matching");
}
}

}
?>
