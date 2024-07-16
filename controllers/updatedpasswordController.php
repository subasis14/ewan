<?php

Class updatedpasswordController Extends baseController {

    public function index() {
        $lang = 'eng';
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        $lanObj = new language();
        $output = $lanObj->getLanguage($lang);
        $formObj = new Form();
        if ($_POST['ajax'] == 1) {
            if ($_POST['reqType'] == 'updatedpassword') {
                $email = $_SESSION['email'];
                $passw = $_POST['password'];
                $result = $formObj->updatePassword($email, $passw);
                echo json_encode($result);
            }
        } else {

            $this->registry->template->output = $output;

            $this->registry->template->show('dashboard/updatedpassword');
        }
    }

}
