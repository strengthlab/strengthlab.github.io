<?php
extract($_POST);
if(isset($_POST['submit'])) {
    echo "<pre>"; print_r($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent=" From: $name - $email \n Message: $message";
    $recipient = "nicholasbacuez@gmail.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader);
    echo "Thank You!";
    header('Location:online_training.html');
}
?>

