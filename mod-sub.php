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
$user=$_SESSION['id'];
$newspaper=$_POST['newspaper'];
$remove=$_POST['remove_news'];
$query="DELETE FROM newspaper WHERE user='$user' and news='$remove'";
if (mysqli_query($conn, $query)) {
    #echo 'Your subscription is modified.';
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
$query="INSERT INTO newspaper (user,news) VALUES('$user','$newspaper')";
if (mysqli_query($conn, $query)) {
    echo "<script>window.alert('Your subscription is modified');window.location.href='NewspaperSubscription.html';</script>";
} 
else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>