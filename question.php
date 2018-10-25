<?php
$servername='localhost';
$username='root';
$password='';
$dbname='localvendor';

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

$number=$_POST['number'];
$address=$_POST['address'];
$complaint=$_POST['complaint'];

$query="INSERT INTO complaints (number,address,complaint) VALUES ('$number','$address','$complaint')";
if (mysqli_query($conn, $query)) {
    echo "<script>alert('Your complaint is recorded');
    window.location.href='questions.html';</script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>