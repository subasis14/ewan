<?php

Class settingsController Extends baseController {

    public function index() {
        $lang = 'eng';
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        $lanObj = new language();
        $output = $lanObj->getLanguage($lang);

        $formObj = new Form();
        if ($_POST['ajax'] == 1) {
            if ($_POST['reqType'] == 'checkoldPassword') {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $result = $formObj->signin($email, $password);
                echo json_encode($result);
            }
            if ($_POST['reqTypeUpdatePassword'] == 'updatePassword') {
                $email = $_POST['email'];
                $password = $_POST['newPassword'];
                $result = $formObj->updatePassword($email, $password);
                unset($_SESSION["email"]);
                unset($_SESSION["OTP"]);
                unset($_SESSION["logged"]);
// remove all session variables
                session_unset();

// destroy the session
                session_destroy();
                echo json_encode($result);
            }
        } else {
            if ($_GET['qs1'] === 'viewprofile') {
                $email = $_SESSION['email'];
                 $data = $formObj->getAdminUserData($email);
                $this->registry->template->output = $data;
                $this->registry->template->show('dashboard/settings/viewprofile');
            } elseif ($_GET['qs1'] === 'resetpassword') {
                $email = $_SESSION['email'];
                $data = $formObj->getAdminUserData($email);
                $this->registry->template->output = $data;
                $this->registry->template->show('dashboard/settings/resetpassword');
            } else {
                $this->registry->template->show('dashboard/settings');
            }
        }
    }

}
