<?php

Class individualsectorController Extends baseController {

    public function index() {
        $lang = 'eng';
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        $lanObj = new language();
        $output = $lanObj->getLanguage($lang);
        $emailObj = new email();
        $formObj = new Form();
        $adminEmail=$formObj->getAdminEmail();
     
            if ($_POST['ajax'] == 1) {
                    if ($_POST['reqType'] == 'insertIndividualForm') {
                    $fistName = $_POST['first_name'];
                    $family_name = $_POST['family_name'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $gender = $_POST['optradio'];
                    $profession = $_POST['select_profession'];
                    $city = $_POST['select_city'];
                    $nationalities = $_POST['select_nationalities'];
                    $requiredPeriod = $_POST['required_period'];
    
                    $profession_text = $_POST['select_profession_text'];
                    $city_text = $_POST['select_city_text'];
                    $nationalities_text = $_POST['select_nationalities_text'];
                    $requiredPeriod_text = $_POST['required_period_text'];
                    
                    $result = $formObj->insertIndividualFormData($fistName, $family_name, $email, $mobile, $gender, $profession, $city, $nationalities, $requiredPeriod);
                    if ($result) {
                        $userSubject="Acknowledgment from Ewam Team";
                        $adminSubject="New Enquiry from Individual Sector";
                        $adminBody=nl2br("Find the following details below\nFirst Name:".$fistName."\nLast Name:".$family_name."\nEmail:".$email."\nMobile Number:".$mobile."\nGender:".$gender."\nProfession:".$profession_text."\nBranch/City:".$city_text."\nNationalities:".$nationalities_text."\nPeriod:".$requiredPeriod_text."\n<img alt='PHPMailer' width='160px' src='http://karnatakahub.com/assets/images/logo.png'>\n");
                        $userBody=nl2br("Dear ".$fistName."\nGreetings from Ewan Recruitment! Thank you for contacting us.\nWe have received your enquiry. One of our relationship managers will get in touch with you for more details, within the next 24-48 hours\nShould it be urgent, you can reach us directly on Phone at +966 11 4 7777 02 & Email at <a href='mailto:info@ewanintl.sa' target='_blank'>info@ewanintl.sa</a>.\n\nThank you\n<img alt='PHPMailer' width='160px' src='http://karnatakahub.com/assets/images/logo.png'>\n<a href='http://www.ewanintl.sa' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://www.ewanintl.sa&amp;source=gmail&amp;ust=1600269440357000&amp;usg=AFQjCNHRLOJAaMqLl3KYUDdknL_69q9lmg'>www.ewanintl.sa</a>");
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
                    $result = $formObj->updateIndividualStatusById($status, $row_id);
                    echo json_encode($result);
                }
                if ($_POST['reqType'] == 'getSelectBoxData') {
                    $form_id=$_POST['form_id'];
                    $data = [];
                    $Prf_result = $formObj->getProfessionDataForFrontEnd($form_id);
                    $Brn_result = $formObj->getBranchDataForFrontEnd($form_id);
                    $Nat_result = $formObj->getNationalitiesDataForFrontEnd($form_id);
                    $Per_result = $formObj->getPeriodDataForFrontEnd($form_id);
                    array_push($data, $Prf_result, $Brn_result, $Nat_result, $Per_result);
                    echo json_encode($data);
                }
            } else {
            $this->registry->template->output = $output;

            $this->registry->template->show('services/individualsector');
            }
            
    }

}
