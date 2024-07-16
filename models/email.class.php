<?php
require 'phpmailer/PHPMailerAutoload.php'; 

class email {
    
    public $admilMailId="subasis14@gmail.com";
    
    function sendmail($to_email, $subject, $body, $from_name="Ewan Service",$cc_to="") {
        ini_set('SMTP', 'localhost');
        ini_set('smtp_port', 25);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: ".$from_name." ". "\r\n";
        if($cc_to<>""){
            $headers .= "Cc: ".$cc_to." ". "\r\n";
        }
        ini_set('sendmail_from', 'ewan@karnatakahub.com');
        $sendmail = mail($to_email, $subject, $body, $headers);
        return $sendmail;

    }
    
    function newMail($to_email, $subject, $body,$cvPath="",$attachment_temp_name="",$attachment_file_name="", $from_name="ewan@karnatakahub.com",$cc_to=""){
        // ini_set('SMTP', 'mail.karnatakahub.com');
        // ini_set('smtp_port', 587);
        // ini_set('sendmail_from', 'ewan@karnatakahub.com');
        // $headers = "From: ".$from_name;
       // $body="<html><body><h1>Hello</h1></body></html>";
        // $sendmail = mail($to_email, $subject, $body, $headers);
        // return $sendmail;
        
         $mail = new PHPMailer;// create object of class PHPMailer 
         
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
           $mail->setFrom('ewan@karnatakahub.com', 'Ewan Team'); 
            
        // EDIT REQUIRED 
        // Add a recipient it is address where you want to send your email you can add multiple here 
          $mail->addAddress($to_email);  
        //   $mail->addAddress('subasis14@gmail.com');   
        // $mail->addAddress('ellen@example.com');   // to send multiple email  
         $mail->AddEmbeddedImage("http://karnatakahub.com/ewan/assets/images/logo.png", "my-attach", "logo.png");
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
           $mail->Subject = $subject; 
           
        // write your body content we can use html     
           $mail->Body    = $body;  
           $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; 
         if($cvPath!=null){
             $pathName=end(explode("/",$cvPath));
           $mail->AddAttachment(
                                 $cvPath,
                                $pathName,
                                'base64',
                                'mime/type'
                            );
           }
        //  $mail->Body    = '<div>This is the HTML message body in bold!</div>';   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; 
        /* finally send email if email send is success then print 'Message has been sent' 
           if not then print 'Message could not be sent' 
        */ 
        $mail->send();
   
    }

    /*
        params are as follows
            sender email , sending email lists in comma separated emails , email subject , email message ,bcc email, files .
        files structure
            file[]['name'] ,file[index]['size'] ,file[index]['type'] .
            index starts from zero
    */
    function emailWithAttcahment($from_email,$to_email, $subject, $sender_message ,$sender_name,$bcc_email=null, $files=null) {

        ini_set('SMTP', 'mail.karnatakahub.com');
        ini_set('smtp_port', 587);
        ini_set('sendmail_from', $from_email);
        $recipient_email = $to_email; //recepient
        $subject = $subject; //email subject line
        $attachments = $files;
        // if($bcc_email) {
        //     $bcc_email .= "";
        // }else{
        //     $bcc_email .= "";
        // }
        //php validation
        if($attachments){
            if (strlen($sender_name) < 4) {
                die('Name is too short or empty');
            }
            if (!filter_var($from_email, FILTER_VALIDATE_EMAIL)) {
                die('Invalid email');
            }
            if (strlen($sender_message) < 4) {
                die('Too short message! Please enter something');
            }

            $file_count = count($attachments); //count total files attached
            $boundary = md5("karnatakahub.com");

            if ($file_count > 0) { //if attachment exists
                //header
//                $headers = "From: " . $from_email . "\r\n";
                $headers ='';
                if($bcc_email) {
                    $headers .= "Bcc: " . $bcc_email . "\r\n";
//                    $headers .= "Bcc: \r\n";
                }
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

                //message text
                $body = "--$boundary\r\n";
                $body .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
                $body .= chunk_split(base64_encode($sender_message));

                //attachments
                for ($x = 0; $x < $file_count; $x++) {
                    if (!empty($attachments[$x]['name'])) {

                        if ($attachments[$x]['error'] > 0) //exit script and output error if we encounter any
                        {
                            $mymsg = array(
                                1 => "The uploaded file exceeds the upload_max_filesize directive in php.ini",
                                2 => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
                                3 => "The uploaded file was only partially uploaded",
                                4 => "No file was uploaded",
                                6 => "Missing a temporary folder");
                            die($mymsg[$attachments[$x]['error']]);
                        }

                        //get file info
                        $file_name = $attachments[$x]['name'];
                        $file_size = $attachments[$x]['size'];
                        $file_type = $attachments[$x]['type'];

                        //read file
                        $handle = fopen($attachments[$x]['name'], "r");
                        $content = fread($handle, $file_size);
                        fclose($handle);
                        $encoded_content = chunk_split(base64_encode($content)); //split into smaller chunks (RFC 2045)

                        $body .= "--$boundary\r\n";
                        $body .= "Content-Type: $file_type; name=" . $file_name . "\r\n";
                        $body .= "Content-Disposition: attachment; filename=" . $file_name . "\r\n";
                        $body .= "Content-Transfer-Encoding: base64\r\n";
                        $body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
                        $body .= $encoded_content;
                    }
                }
            }
        } else { //send plain email otherwise
            $headers='';
            if($bcc_email) {
                $headers .= "Bcc: " . $bcc_email. "\r\n";
            }
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: ".$sender_name."<".$from_email. ">\r\n";

            $body=$sender_message;

        }

        $sentMail = @mail($recipient_email, $subject, $body, $headers);
        if ($sentMail) //output success or failure messages
        {
            return('success');
        } else {
            return('failed');
        }
    }

    /*params: full path of file
     returns content type , can be added directly into email header
    */
    function mime_content_type($filename) {

        $mime_types = array(

            'txt' => 'text/plain',
            'htm' => 'text/html',
            'html' => 'text/html',
            'php' => 'text/html',
            'css' => 'text/css',
            'js' => 'application/javascript',
            'json' => 'application/json',
            'xml' => 'application/xml',
            'swf' => 'application/x-shockwave-flash',
            'flv' => 'video/x-flv',

            // images
            'png' => 'image/png',
            'jpe' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',

            // archives
            'zip' => 'application/zip',
            'rar' => 'application/x-rar-compressed',
            'exe' => 'application/x-msdownload',
            'msi' => 'application/x-msdownload',
            'cab' => 'application/vnd.ms-cab-compressed',

            // audio/video
            'mp3' => 'audio/mpeg',
            'qt' => 'video/quicktime',
            'mov' => 'video/quicktime',

            // adobe
            'pdf' => 'application/pdf',
            'psd' => 'image/vnd.adobe.photoshop',
            'ai' => 'application/postscript',
            'eps' => 'application/postscript',
            'ps' => 'application/postscript',

            // ms office
            'doc' => 'application/msword',
            'rtf' => 'application/rtf',
            'xls' => 'application/vnd.ms-excel',
            'ppt' => 'application/vnd.ms-powerpoint',

            // open office
            'odt' => 'application/vnd.oasis.opendocument.text',
            'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
        );

        $ext = strtolower(array_pop(explode('.',$filename)));
        if (array_key_exists($ext, $mime_types)) {
            return $mime_types[$ext];
        }
        elseif (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME);
            $mimetype = finfo_file($finfo, $filename);
            finfo_close($finfo);
            return $mimetype;
        }
        else {
            return 'application/octet-stream';
        }
    }

}




