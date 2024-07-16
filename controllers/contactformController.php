<?php

Class contactformController Extends baseController {

    public function index() {
        $lang = 'eng';
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }else{
            $_SESSION['lang']='ar';
        }
        $formObj = new Form();
        $emailObj = new email();
        $adminEmail=$formObj->getAdminEmail();
        
            if ($_POST['ajax'] == 1) {
                if ($_POST['reqType'] == 'insertContactForm') {
                $fistName = $_POST['first_name'];
                $family_name = $_POST['family_name'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $select_subject = $_POST['select_subject'];
                $w3review = $_POST['w3review'];

                $select_subject_text = $_POST['select_profession_text'];

                $result = $formObj->insertContactFormData($fistName, $family_name, $email, $mobile, $select_subject, $w3review);
                if ($result) {
                    $userSubject = "Acknowledgment from Ewam Team";
                    $adminSubject = "New Enquiry from Contact";
                    $adminBody = nl2br("Find the following details below\nFirst Name:" . $fistName . "\nLast Name:" . $family_name . "\nEmail:" . $email . "\nMobile Number:" . $mobile . "\nSubject:" . $select_subject_text . "\nMessage:" . $w3review . "\n<img alt='PHPMailer' width='160px' src='http://karnatakahub.com/assets/images/logo.png'>\n");
                    $userBody = nl2br("Dear " . $fistName . "\nGreetings from Ewan Recruitment! Thank you for contacting us.\nWe have received your enquiry. One of our relationship managers will get in touch with you for more details, within the next 24-48 hours\nShould it be urgent, you can reach us directly on Phone at +966 11 4 7777 02 & Email at <a href='mailto:info@ewanintl.sa' target='_blank'>info@ewanintl.sa</a>.\n\nThank you\n<img alt='PHPMailer' width='160px' src='http://karnatakahub.com/assets/images/logo.png'>\n<a href='http://www.ewanintl.sa' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://www.ewanintl.sa&amp;source=gmail&amp;ust=1600269440357000&amp;usg=AFQjCNHRLOJAaMqLl3KYUDdknL_69q9lmg'>www.ewanintl.sa</a>");
                    $emailObj->newMail($adminEmail[0]['Usr_Email'], $adminSubject, $adminBody);
                    $emailObj->newMail($email, $userSubject, $userBody);
                    echo true;
                } else {
                    echo false;
                }
            }
                if ($_POST['reqType'] == 'statusUpdate') {
                    $status = $_POST['status'];
                    $row_id = $_POST['rowId'];
                    $result = $formObj->updateContactUsStatusById($status, $row_id);
                    echo json_encode($result);
                }
                 if ($_POST['reqType'] == 'getsubject') {
                    $result = $formObj->getSubjectDataForFrontEnd();
                    echo json_encode($result);
                }
                
            }else {
            $lanObj = new language();
            $output = $lanObj->getLanguage($lang);

            $this->registry->template->result = "False";
            $this->registry->template->output = $output;

            $this->registry->template->show('contactform/contactform');
        }
    }

}
