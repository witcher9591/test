<?php
session_start();

include 'dbcon.php';
if (isset($_GET['token'])) {
$token=$_GET['token'];
$updatequery = "update register set status ='active' where token='$token'";
$query= mysqli_query($con,$updatequery);
if ($query) {
if (isset($_SESSION['msg'])){
$_SESSION['msg']='Account activated succesfully echo("$SESSION['username']")';
echo("activated");
header('location:login.php');

}else{
$_SESSION['msg']='You are Logged out';
echo("logged out");
header('location:login.php');

}

}
else{
$_SESSION['msg']='Account not updated' ;
header('location:index.html');

}
}


?>