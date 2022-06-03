<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer;

$mail->isSMTP();                      
$mail->Host = 'smtp.gmail.com';       
$mail->SMTPAuth = true;               
$mail->Username = 'gabrielahaagcimol@gmail.com';  
$mail->Password = 'gabicimol02';   
$mail->SMTPSecure = 'tls';           
$mail->Port = 587;                    


$mail->setFrom('gabrielahaagcimol@gmail.com', 'Gabriela');
$mail->addReplyTo('gabrielahaagcimol@gmail.com', 'Gabriela');

$mail->addAddress('gabrielahaagcimol@gmail.com');



$mail->isHTML(true);


$mail->Subject = assuntoEmail;

$bodyContent .= conteudoMensagem;
$mail->Body    = $bodyContent;

if(!$mail->send()) { 
    echo 'Mensagem não pode ser enviada. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo 'Mensagem enviada.'; 
} 
 
?>