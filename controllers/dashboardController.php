<?php

Class dashboardController Extends baseController {

    public function index() {
        $lang = 'eng';
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }else{
            $_SESSION['lang']='ar';
        }
        $lanObj = new language();
        $output = $lanObj->getLanguage($lang);
        $formObj = new Form();
        // $email = new email();
        
        if ($_POST['ajax'] == 1) {
            if ($_POST['reqType'] == 'countUp') {
                $result = $formObj->getFormDataCounter();
                echo json_encode($result);
            }
            if ($_POST['reqType'] == 'modalService') {
                $result = $formObj->getCorporateformDataById($_POST['post_id']);

                echo json_encode($result);
            }
            if ($_POST['reqType'] == 'modalServiceHealthcare') {
                $result = $formObj->getHealthcareDataById($_POST['post_id']);
                $update = $formObj->updatehealthcareformSeenDataById($_POST['post_id']);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == 'modalServiceIndividual') {
                $result = $formObj->getIndividualDataById($_POST['post_id']);
                $update = $formObj->updateIndividualformSeenDataById($_POST['post_id']);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == 'modalServiceCorporate') {
                $result = $formObj->getCorporateformDataById($_POST['post_id']);
                $update = $formObj->updateCorporateformSeenDataById($_POST['post_id']);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == 'modalOurTeam') {
                $result = $formObj->getOurTeamFormDataById($_POST['post_id']);
                $update = $formObj->updateourteamformSeenDataById($_POST['post_id']);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == 'modalContact') {
                $result = $formObj->getContactFormDataId($_POST['post_id']);
                $update = $formObj->updatecontactformSeenDataById($_POST['post_id']);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "deleteServiceCorporate") {
                $pfr_id = $_POST['post_id'];
                $result = $formObj->deleteCorporateDataById($pfr_id);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "deleteServiceIndividual") {
                $pfr_id = $_POST['post_id'];
                $result = $formObj->deleteIndividualDataById($pfr_id);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "deleteServiceHealthcare") {
                $pfr_id = $_POST['post_id'];
                $result = $formObj->deleteHealthcareDataById($pfr_id);
                echo json_encode($result);
            }
        } else {
           
            $CorporateData = $formObj->getCorporateformData();
            $individualData = $formObj->getIndividualFormData();
            $healthcareData = $formObj->getHealthcareformFormData();
            $ourTeamData = $formObj->getOurTeamFormData();
            $contactData = $formObj->getContactFormData();
            $allSectorData = $formObj->getAllSectorData();

            $this->registry->template->ourTeamData = $ourTeamData;
            $this->registry->template->contactData = $contactData;
            $this->registry->template->allData = $allSectorData;
            $this->registry->template->healthcareData = $healthcareData;
            $this->registry->template->individualData = $individualData;
            $this->registry->template->CorporateData = $CorporateData;

            //  $data=$email->newMail("subasis14@gmail.com", "Hi", "TEST");
            // print_r($data);
            $this->registry->template->show('dashboard/dashboard');
        }
    }

}
