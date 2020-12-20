<?php
$to = 'akcgjc007@gmail.com';
$subject = 'BLANK MESSAGE';
$message = 'WHO DO WE THINK WE ARE'; 
$from = 'anupam.kumar@iitgn.ac.in';
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>