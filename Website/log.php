<?php
session_start();

$con= mysqli_connect('localhost','root','');
if (!$con) {
echo "Not connected to server";
}
if(!mysqli_select_db($con,'signup'))
{
    echo "Database not selected";
}
if (isset($_POST['submit'])) {
                  
	$email=$_POST['email'];
	$password=$_POST['password'];
$passs=password_hash($password, PASSWORD_BCRYPT);
// echo("$passs");
$email_search= " SELECT * FROM register WHERE email='$email' and status='active' ";
$query= mysqli_query($con,$email_search);

$email_count=mysqli_num_rows($query);
// echo("$email_count");
if($email_count){
$email_pass=mysqli_fetch_assoc($query);

$db_pass=$email_pass['password'];

// echo("$db_pass");

$_SESSION['username']=$email_pass['username'];
$NAME=$_SESSION['username'];

$pass_decode=password_verify($password, $db_pass);

 
if ($pass_decode) {
	echo("login succesful $NAME");
    $_SESSION['msg']="You have logged in succesfully";

                   header("Refresh:2;url=form.php");


}else{
	echo("Password incorrect");
                   header("Refresh:2;url=login.php");

}

}

else{
	echo("Email not Verified");
                   header("Refresh:2;url=login.php");


}
}

?>