<?php 
// require_once './vendor/autoload.php';
require_once 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/SmtpTransport.php';
// require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';


// Create the SMTP configuration
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587))
->setUsername('email')
->setPassword('password')
;

$transport->setUsername("Username");
$transport->setPassword("Password");


// $transport =Swift_MailTransport::newInstance();
$mail =Swift_Mail::newInstance($transport);
$message =Swift_Message::newInstance("bienvenue")
->setFrom([$_POST['email'] => "ahmed"])
->setTo("ghoul.ahmed5@gmail.com")
->setBody($_POST['msg']);

$result = $mail->send($message);
var_dump($result);
echo $_POST['email'];
echo $_POST['qte'];
echo $_POST['msg'];

mail('destinataire@truc.com','Sujet',$_POST['msg'],'From:'. $_POST['email']);

// header('Location:index.php');

?>    