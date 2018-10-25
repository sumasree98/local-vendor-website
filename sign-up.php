<?php
$servername='localhost';
$username='root';
$password='';
$dbname='localvendor';

$conn=mysqli_connect($servername,$username,$password,$dbname);


if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
/*else{
    echo'connection successfull';
}*/

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $contactnumber=$_POST['contactnumber'];
    $password=$_POST['password'];
    $conpassword=$_POST['conpassword'];
    if($password!=$conpassword){
        echo "<script>alert('Passwords do not match');
        window.location.href='SignUp.html';</script>";
        
        }
    else{
    $query="INSERT INTO account (firstname,lastname,username,email,number,password) VALUES ('$firstname','$lastname','$username','$email','$contactnumber','$password')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('You are successfully registered');window.location.href='SignIn.html';</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    }

?>