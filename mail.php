<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


ini_set("max_execution_time", 120);

// Instantiation and passing `true` enables exceptions
$phpmailer = new PHPMailer(true);
try{
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.mailtrap.io';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 2525;
  $phpmailer->Username = 'a40102deb996c7';
  $phpmailer->Password = 'e0dcd2b9f6a2e2';

    //Recipients
    $phpmailer->setFrom($_POST["email"], $_POST["name"]);
    $phpmailer->addAddress('catopia@maildrop.cc');     // Add a recipient

    $phpmailer->isHTML(false);                                  // Set email format to HTML
    $phpmailer->Subject = isset($_POST["subject"]) ? $_POST["subject"] : "";
    $phpmailer->Body    = $_POST["message"];
    $phpmailer->AltBody = $_POST["message"];

    $phpmailer->send();
    echo 'Message has been sent';

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
}

///////////////////////////////////////////////////////////


//    $to = 'catopia@maildrop.cc';
//    $firstname = $_POST["name"];
//    $email= $_POST["email"];
//    $text= $_POST["message"];
//    
//    $subject = isset($_POST["subject"]) ? $_POST["subject"] : "";
//    
//
//
//    $headers = 'MIME-Version: 1.0' . "\r\n";
//    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
//    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//    $message ='<table style="width:100%">
//        <tr>
//            <td>'.$firstname.' </td>
//        </tr>
//        <tr><td>Email: '.$email.'</td></tr>
//        <tr><td>Text: '.$text.'</td></tr>
//        
//    </table>';

?>
