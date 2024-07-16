<?php

Class ourservicesController Extends baseController {

    public function index() {
        $lang = 'eng';
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        $lanObj = new language();
        $output = $lanObj->getLanguage($lang);

        $formObj = new Form();

        if ($_GET['qs1'] === 'corporatesector') {
            $CorporateData = $formObj->getCorporateformData();
            $this->registry->template->CorporateData = $CorporateData;
            $this->registry->template->show('dashboard/ourservices/corporatesector');
        }
        if ($_GET['qs1'] === 'individualsector') {
            
            $individualData = $formObj->getIndividualFormData();
            $this->registry->template->individualData = $individualData;
            $this->registry->template->show('dashboard/ourservices/individualsector');
        }
        if ($_GET['qs1'] === 'healthcaresector') {
            $healthcareData = $formObj->getHealthcareformFormData();
            $this->registry->template->healthcareData = $healthcareData;
            $this->registry->template->show('dashboard/ourservices/healthcaresector');
        }
    }

}
