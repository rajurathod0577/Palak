<?php
include('includes/config.php');
if(!empty($_GET['tokan']) && isset($_GET['tokan'])){
$code=$_GET['tokan'];
$sql=mysqli_query($con,"SELECT * FROM users WHERE tokan='$code'");
$num=mysqli_fetch_array($sql);
if($num>0){
$resultset =mysqli_query($con,"SELECT id FROM users WHERE tokan='$code' and status='0'");
$result=mysqli_fetch_array($resultset);
if($result>0){
$update=mysqli_query($con,"UPDATE users SET status='1' WHERE tokan='$code'");
$msg="Your account is successfully activated";
echo $msg;
}
else{
$msg ="Your account is already active, no need to activate again";
echo $msg;}
}
else{
$msg ="Wrong activation code.";
echo $msg;
}
}
?>