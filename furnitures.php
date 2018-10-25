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
if($a=$_POST['1']){
    $query="INSERT INTO homedecor (user,item) VALUES('$user','$a')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Added to cart.');window.location.href='homedecor.html';</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}



?>