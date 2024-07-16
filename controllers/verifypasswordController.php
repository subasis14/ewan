<?php

Class verifypasswordController Extends baseController {

    public function index() {
        $lang = 'eng';
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        $lanObj = new language();
        $output = $lanObj->getLanguage($lang);
        $formObj = new Form();
        
        if ($_POST['ajax'] == 1) {
            if ($_POST['reqType'] == 'verifyotp') {
                $otp = $_POST['code'];
                $data = strcmp($otp, $_SESSION['OTP']);
                
                echo $data;
            }
        } else {
            $this->registry->template->output = $output;

            $this->registry->template->show('dashboard/verifypassword');
        }
    }

}
