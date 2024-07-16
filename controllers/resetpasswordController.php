<?php

Class resetpasswordController Extends baseController {

    public function index() {
        $lang = 'eng';
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        $lanObj = new language();
        $output = $lanObj->getLanguage($lang);
        $formObj = new Form();
        $emailObj = new email();
        if ($_POST['ajax'] == 1) {
            if ($_POST['reqType'] == 'resetPassword') {
                $email = $_POST['email'];
                $result = $formObj->emailChcekExists($email);
                if (isset($result)) {
                    $six_digit_random_number = mt_rand(100000, 999999);
                    $_SESSION['email'] = $result[0]['Usr_Email'];
                    $_SESSION['OTP'] = $six_digit_random_number;
                    $body=nl2br("Please use this code to reset the password for the Ewan account so ".$_SESSION['email']."\nHere is your code:".$six_digit_random_number."\n\nThank you\n<img alt='PHPMailer' width='160px' src='http://karnatakahub.com/assets/images/logo.png'>\n<a href='http://www.ewanintl.sa' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://www.ewanintl.sa&amp;source=gmail&amp;ust=1600269440357000&amp;usg=AFQjCNHRLOJAaMqLl3KYUDdknL_69q9lmg'>www.ewanintl.sa</a>");
                    // $body=$six_digit_random_number;
                     $emailObj->newMail($_SESSION['email'], "Password reset code", $body);
                    //  $data=$email->newMail("subasis14@gmail.com", "Hi", "TEST");
                }
                echo json_encode($result);
            }
            
             if ($_POST['reqType'] == 'resendPassword') {
               
                    $resend_six_digit_random_number = mt_rand(100000, 999999);
                    $_SESSION['OTP'] = $resend_six_digit_random_number;
                    $body=nl2br("Please use this code to reset the password for the Ewan account so ".$_SESSION['email']."\nHere is your code:".$resend_six_digit_random_number."\n\nThank you\n<img alt='PHPMailer' width='160px' src='http://karnatakahub.com/assets/images/logo.png'>\n<a href='http://www.ewanintl.sa' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://www.ewanintl.sa&amp;source=gmail&amp;ust=1600269440357000&amp;usg=AFQjCNHRLOJAaMqLl3KYUDdknL_69q9lmg'>www.ewanintl.sa</a>");
                    // $body=$six_digit_random_number;
                     $emailObj->newMail($_SESSION['email'], "Password reset code", $body);
                    //  $data=$email->newMail("subasis14@gmail.com", "Hi", "TEST");
               
                 echo $_SESSION['email'];
            }
        } else {

            $this->registry->template->show('dashboard/resetpassword');
        }
    }

}
