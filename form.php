<?php

$to = 'iq-m@att.net';
$subject = 'My website';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$body = <<<<Email

Hi! my name is $name.
$message

from $name
my email is $email


EMAIL;

$header = "from: $email";

if($_POST){

  if($name == '' || $email == '' || $message == ''){

    $feedback = 'Please fill out the fields!'

  } else{

  mail($to, $subject, $body, $header);
  $feedback = 'Your message has been send!';

  }

}

?>
