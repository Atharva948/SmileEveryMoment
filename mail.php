<?php
  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['text'];
$to = "atharva9408@gmail.com";
$subject = "Smile Every Moment";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@smileeverymoment.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>