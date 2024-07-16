<?php

require 'phpmailer/PHPMailerAutoload.php'; 
Class testController Extends baseController {

    public function index() {
   $mail = new PHPMailer;// create object of class PHPMailer 
   
// print client server communication output if we don't want to print it we can use 3 
//   $mail->SMTPDebug = 4;   
   
// Set mailer to use SMTP 
   $mail->isSMTP();  
    
// Specify main and backup SMTP servers  
   $mail->Host = 'mail.karnatakahub.com'; 
    
// Enable SMTP authentication 
   $mail->SMTPAuth = true; 
   
// EDIT REQUIRED  
// SMTP username mainly it is sender gmail replace 'techifind@gmail.com' with your gmail    
   $mail->Username = 'ewan@karnatakahub.com';  
  
// EDIT REQUIRED    
// SMTP password it is your gmail password 
   $mail->Password = '12345678'; 
    
// Enable TLS encryption, `ssl` also accepted 
   $mail->SMTPSecure = 'tls';   
 
// TCP port to connect to  
   $mail->Port = 587; 
 
// EDIT REQUIRED     
// set from it show in from of your mail  
   $mail->setFrom('ewan@karnatakahub.com', 'vinay kumar'); 
    
// EDIT REQUIRED 
// Add a recipient it is address where you want to send your email you can add multiple here 
   $mail->addAddress('subasis14@gmail.com');      
// $mail->addAddress('ellen@example.com');   // to send multiple email  
 
// EDIT REQUIRED 
// set reply to  
   $mail->addReplyTo('ewan@karnatakahub.com', 'no-reply'); 
    
//set cc or bcc it is optional    
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
 
// Add attachments it is optional 
// $mail->addAttachment('/var/tmp/file.tar.gz');          
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');  
 
// Set email format to HTML if you want to send html document  
   $mail->isHTML(true); 
    
// set subject of your email 
   $mail->Subject = 'Here is the subject'; 
   
// write your body content we can use html     
   $mail->Body    = '<div>This is the HTML message body in bold!</div>';   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; 
 
/* finally send email if email send is success then print 'Message has been sent' 
   if not then print 'Message could not be sent' 
*/ 
   if(!$mail->send()) { 
    echo 'Message could not be sent.'; 
    echo 'Mailer Error: ' . $mail->ErrorInfo; 
   }   
   else   
   { 
    echo 'Message has been sent'; 
   } 
    
   // here we can change value dynamically with php variable as per required 

}
    
}
