<?php
session_start();
$servername='localhost';
$username='root';
$password='';
$dbname='localvendor';

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
$user=$_POST['username'];
$pass=$_POST['password'];

$result=mysqli_query($conn,"SELECT id FROM account where username='$user' and password='$pass'");
$row=mysqli_num_rows($result);
if($row==1){
    $_SESSION['id']=$user;
    echo( $_SESSION['id']);
    header("location:welcome.html");
}
else{
    echo"<script>window.alert('Invalid username and password'); window.location.href='SignIn.html';</script>";

}
?>