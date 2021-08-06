<?php
//getting the data from the form

$name = $_POST['name'];
$email = $_POST['emailadd'];
$number = $_POST['number'];
$message = $_POST['message'];

$to = "itsyourboyrj31@gmail.com";

$subject = "MAIL FROM SHUTTER AND SHOOT ";

$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\nMessage =" . $message . "\r\nMobile No. = " . $number;

$headers = "From: noreply@shutterandshoot.herokuapp.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);

}
//redirect
header("Location:thankyou.html");
?>
