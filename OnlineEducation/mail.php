<?php
session_start();
$d=$_SESSION['email'];
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'kumarpriyanshu717@gmail.com';                 // SMTP username
    $mail->Password = 'dadmomsis';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('noreply@poornima.org', 'Priyanshu Kumar');
    $mail->addAddress("$d");               // Name is optional
    $mail->addReplyTo('kumarpriyanshu717@gmail.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Online System';
    $mail->Body    = 'Hello!
                       Welcome to Online System 
                       <b>Priyanshu Kumar</b> (7062152865).';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   echo "<script>alert('Account sucessfully created');
        window.location.href='loginuser.php'</script>";
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
