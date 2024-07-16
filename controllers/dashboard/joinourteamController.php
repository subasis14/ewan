<?php

Class joinourteamController Extends baseController {

    public function index() {
        $lang = 'eng';
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        $lanObj = new language();
        $output = $lanObj->getLanguage($lang);
        $formObj = new Form();
        if ($_POST['ajax'] == 1) {
            if ($_POST['reqType'] == 'modalOurTeam') {
                $result = $formObj->getOurTeamFormDataById($_POST['post_id']);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == 'statusUpdate') {
                $status = $_POST['status'];
                $row_id = $_POST['rowId'];
                $result = $formObj->updateOurTeamStatusById($status, $row_id);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "deleteJobEnquiry") {
                $pfr_id = $_POST['post_id'];
                $result = $formObj->deleteJobEnquiryDataById($pfr_id);
                echo json_encode($result);
            }
        } else {
            $ourTeamData = $formObj->getOurTeamFormData();
            $this->registry->template->ourTeamData = $ourTeamData;
            $this->registry->template->show('dashboard/joinourteam');
        }
    }

}
