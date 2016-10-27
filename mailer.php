<?php

require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';

$name = filter_input(INPUT_POST, "name");
$phone = filter_input(INPUT_POST, "phone");
$mail = filter_input(INPUT_POST, "mail");
$message = filter_input(INPUT_POST, "message");

$transport = Swift_SmtpTransport::newInstance('mail.proyectiva.com', 25)
        ->setUsername('test@proyectiva.com')
        ->setPassword('tes8765!');

$mailer = Swift_Mailer::newInstance($transport);

$swiftMail = Swift_Message::newInstance()
        ->setSubject('Nuevo mensaje | europiebuenosaires.com')
        ->setFrom(array($mail => $name))
        ->setTo(array('europie.bsas@gmail.com'))
        ->setBody($message);

$mailer->send($swiftMail);
