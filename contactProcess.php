<?php 

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;


if(isset($_POST["send"])){

$email = $_POST["email"];
$message = $_POST["message"];

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'your email';
$mail->Password = 'email app password';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('your email', 'Salon Nehara');
 $mail->addReplyTo($email);
$mail->addAddress('your email', 'mail Send');
$mail->isHTML(true);
$mail->Subject = 'You have New Message From Contact form';
$bodyContent = $message;

$mail->Body    = $bodyContent;

//$mail->send();
if(!$mail->send()){
    echo "<script>alert('Failed to send the email');
    window.location.href = 'index.php';
    </script>";
   

}else{

    $replyMail = new PHPMailer;
    $replyMail->IsSMTP();
    $replyMail->Host = 'smtp.gmail.com';
    $replyMail->SMTPAuth = true;
    $replyMail->Username = 'your email';
    $replyMail->Password = 'email app password';
    $replyMail->SMTPSecure = 'ssl';
    $replyMail->Port = 465;

    $replyMail->setFrom('your email', 'Salon Nehara');
    $replyMail->addAddress($email); 
    $replyMail->isHTML(true);
    $replyMail->Subject = 'Thank you for contacting me!';
    $replyMail->Body = "Hello, <br><br>Thank you for reaching out! I have received your message and I will reply shortly.<br><br>Best regards,<br>Salon Nehara";


    if ($replyMail->send()) {
        echo "<script>alert('Successfully sent the mail from $email');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>alert('Failed to send the email');
        window.location.href = 'index.php';
        </script>";
    }

    // echo "<script>alert('Successfully sent the mail from $email');
    //  window.location.href = 'index.php';
    // </script>";
    
}

}


?>
