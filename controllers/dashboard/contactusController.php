<?php

Class contactusController Extends baseController {

    public function index() {
        $lang = 'eng';
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        $lanObj = new language();
        $output = $lanObj->getLanguage($lang);
        $formObj = new Form();
        if ($_POST['ajax'] == 1) {
            if ($_POST['reqType'] == 'modalContact') {
                $result = $formObj->getContactFormDataId($_POST['post_id']);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "deleteContact") {
                $pfr_id = $_POST['post_id'];
                $result = $formObj->deleteContactDataById($pfr_id);
                echo json_encode($result);
            }
        } else {
            $contactData = $formObj->getContactFormData();
            $this->registry->template->contactData = $contactData;

            $this->registry->template->show('dashboard/contactus');
        }
    }

}
