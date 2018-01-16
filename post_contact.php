<?php 
// require_once './vendor/autoload.php';
require_once './vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 25))
  ->setUsername('b1010a7bccc675')
  ->setPassword('26187fd6556530');


// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Qte'.$_POST['qte']))
  ->setFrom([$_POST['email'] => 'user'])
  ->setTo('opencart.opencart@gmail.com')
  ->setBody($_POST['msg'])
  ;

  $result = $mailer->send($message);
  header('Location:index.php');

?>    