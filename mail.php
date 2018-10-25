<?php
$to = 'aditi.kanaujia2016@gmail.com';
$subject = 'Complaint';
$message = 'Enter your complaint'; 
$from = '';
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>