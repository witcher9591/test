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
$Street=$_POST['street'];
$Home=$_POST['home'];
$Zip=$_POST['zip'];
$District=$_POST['district'];
$Province=$_POST['province'];
$Ward=$_POST['ward'];
$Municipality=$_POST['municipality'];
$Country=$_POST['country'];
$NAME=	$_SESSION['username'];

$sql = " INSERT INTO regdata (username,Street,Home,Ward,Municipality,Zip,District,Province,Country,Status) VALUES ('$NAME','$Street','$Home','$Ward','$Municipality','$Zip','$District','$Province','$Country','inactive')";
if(!mysqli_query($con,$sql)) {
echo 'Not Inserted';    
}
else {
    echo'Inserted Succesfully  ';
header("refresh:2;url=form.php");

}

?>