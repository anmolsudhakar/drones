<?php
$Name = $_POST["name"];
$Email = $_POST["email"];
$Message = $_POST["message"];

$to = "falcoroboticscontactus@gmail.com";
$Subject = "Contact US Mail";

$txt = "Name: ". $Name . "\r\n Email: ". $Email ."\r\n Message: ". $Message ;
$headers = "From: 07ai.anmol@gmail.com" . "\r\n";

if($Email!=NULL){
  mail($to,$subject,$txt,$headers);
}

//redirect
header("Location:thankyou.html");
?>