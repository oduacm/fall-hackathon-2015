<?php
/*require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'weareastralbear@gmail.com';                 // SMTP username
$mail->Password = 'Weatherman2015!';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->From = $_POST['email'];
$mail->FromName = $_POST['name'];
$mail->addAddress('weareastralbear@gmail.com', 'Astral Bear');     // Add a recipient, Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');

//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Add attachement, Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $_POST['subject'];
$mail->Body    = $_POST['message'];
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;

} else {
  echo 'Message has been sent';
  header('Location: index.php');
}*/

$headers = 'From: '.$_POST['email'] . "\r\n" .
      'Reply-To: '.$_POST['email'] . "\r\n" .
          'X-Mailer: PHP/' . phpversion();

mail('weareastralbear@gmail.com', $_POST['subject'], $_POST['message'], $headers);

header('Location: index.html');
?>
