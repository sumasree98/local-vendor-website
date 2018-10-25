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
    $quant=$_POST['quant1'];
    $query="INSERT INTO department (user,item,quantity) VALUES('$user','$a','$quant')";
    if (mysqli_query($conn, $query)) {
        //echo "alert('Added to cart');
        echo "<script>window.location.href='department.html';</script>";

    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

?>