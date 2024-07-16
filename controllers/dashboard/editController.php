<?php

Class editController Extends baseController {

    public function index() {
        $lang = 'eng';
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        $lanObj = new language();
        $output = $lanObj->getLanguage($lang);
        $formObj = new Form();
        if ($_POST['ajax'] == 1) {
            if ($_POST['reqType'] == "getFormFields") {
                $result = $formObj->getFormFieldData();
                echo json_encode($result);
            }

//            Professional Start Here
            if ($_POST['reqType'] == "addProfession") {
                $Prf_Name = $_POST['profesional_name'];
                $form_id = $_POST['form_id'];
                $result = $formObj->insertProfessionalFieldData($Prf_Name, $form_id);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "editProsional") {
                $Prf_id = $_POST['post_id'];
                $result = $formObj->getProfessionDataById($Prf_id);
                echo json_encode($result);
            }
            if ($_POST['reqTypeupdate'] == "editProsionalUpdate") {////TODO
                $pfr_name = $_POST['pfr_name'];
                $pfr_id = $_POST['prf_id'];
                $result = $formObj->updateProfessionDataById($pfr_name, $pfr_id);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "confirmDeleteProsional") {
                $pfr_id = $_POST['post_id'];
                $result = $formObj->deleteProfessionDataById($pfr_id);
                echo json_encode($result);
            }
//            Professional End Here
//            Branch Start Here
            if ($_POST['reqType'] == "addBarnch") {
                $Brn_Name = $_POST['branch_name'];
                $form_id = $_POST['form_id'];
                $result = $formObj->insertBranchFieldData($Brn_Name, $form_id);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "editBranch") {
                $Brn_id = $_POST['post_id'];
                $result = $formObj->getBranchDataById($Brn_id);
                echo json_encode($result);
            }
            if ($_POST['reqTypeupdate'] == "editBranchUpdate") {
                $brn_name = $_POST['brn_name'];
                $brn_id = $_POST['brn_id'];
                $result = $formObj->updateBranchDataById($brn_name, $brn_id);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "confirmDeleteBranch") {
                $pfr_id = $_POST['post_id'];
                $result = $formObj->deleteBranchDataById($pfr_id);
                echo json_encode($result);
            }
//            Branch End Here
//            Nationalities Start Here
            if ($_POST['reqType'] == "addNationalities") {
                $nationalities_name = $_POST['nationalities_name'];
                $form_id = $_POST['form_id'];
                $result = $formObj->insertNationalitiesFieldData($nationalities_name, $form_id);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "editnationalities") {
                $Brn_id = $_POST['post_id'];
                $result = $formObj->getNationalitiesDataById($Brn_id);
                echo json_encode($result);
            }
            if ($_POST['reqTypeupdate'] == "editNationalitiesUpdate") {
                $nat_name = $_POST['nat_name'];
                $nat_id = $_POST['nat_id'];
                $result = $formObj->updateNationalitiesDataById($nat_name, $nat_id);
                echo json_encode($result);
            }

            if ($_POST['reqType'] == "confirmDeleteNationalities") {
                $nat_id = $_POST['post_id'];
                $result = $formObj->deleteNationalitiesDataById($nat_id);
                echo json_encode($result);
            }
//            Nationalities End Here            
//            Period Start Here
            if ($_POST['reqType'] == "addPeriod") {
                $period_name = $_POST['period_name'];
                $form_id = $_POST['form_id'];
                $result = $formObj->insertPeriodFieldData($period_name, $form_id);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "editPeriod") {
                $per_id = $_POST['post_id'];
                $result = $formObj->getPeriodDataById($per_id);
                echo json_encode($result);
            }
            if ($_POST['reqTypeupdate'] == "editPeriodUpdate") {
                $per_name = $_POST['per_name'];
                $per_id = $_POST['per_id'];
                $result = $formObj->updatePeriodDataById($per_name, $per_id);
                echo json_encode($result);
            }

            if ($_POST['reqType'] == "confirmDeletePeriod") {
                $per_id = $_POST['post_id'];
                $result = $formObj->deletePeriodDataById($per_id);
                echo json_encode($result);
            }

//            Subject Start Here
            if ($_POST['reqType'] == "addSubject") {
                $subject_name = $_POST['subject_name'];
                $result = $formObj->insertSubjectFieldData($subject_name);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "editSubject") {
                $sub_id = $_POST['post_id'];
                $result = $formObj->getSubjectDataById($sub_id);
                echo json_encode($result);
            }
            if ($_POST['reqTypeupdate'] == "editSubjectUpdate") {
                $per_name = $_POST['sub_name'];
                $per_id = $_POST['sub_id'];
                $result = $formObj->updateSubjectDataById($per_name, $per_id);
                echo json_encode($result);
            }

            if ($_POST['reqType'] == "confirmDeleteSubject") {
                $per_id = $_POST['post_id'];
                $result = $formObj->deleteSubjectDataById($per_id);
                echo json_encode($result);
            }
            //            Job Start Here
            if ($_POST['reqType'] == "addJob") {
                $job_ID = $_POST['job_ID'];
                $job_position = $_POST['job_position'];
                $job_location = $_POST['job_location'];
                $job_type = $_POST['job_type'];
                $job_Description = $_POST['job_Description'];
                $result = $formObj->insertJobFieldData($job_ID,$job_position,$job_location,$job_type,$job_Description);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "editJob") {
                 $job_id = $_POST['post_id'];
                $result = $formObj->getJobDataById($job_id);
                echo json_encode($result);
            }
            if ($_POST['reqTypeupdate'] == "editJobUpdate") {
                $job_id = $_POST['job_id'];
                $job_name = $_POST['job_name'];
                $job_position = $_POST['job_position'];
                $job_location = $_POST['job_location'];
                $job_type = $_POST['job_type'];
                $job_Description = $_POST['job_Description'];
                $result = $formObj->updateJobDataById($job_id,$job_name,$job_position,$job_location,$job_type,$job_Description);
                echo json_encode($result);
            }

            if ($_POST['reqType'] == "confirmDeleteJob") {
                $job_id = $_POST['post_id'];
                $result = $formObj->deleteJobDataById($job_id);
                echo json_encode($result);
            }
             // isActive Status Change 
            if ($_POST['reqType'] == "changePrfActiveStatus") {
               $prf_id = $_POST['prf_id'];
                $active = $_POST['active'];
                $result = $formObj->updateProfessionActiveById($prf_id, $active);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "changeBrnActiveStatus") {
               $prf_id = $_POST['prf_id'];
                $active = $_POST['active'];
                $result = $formObj->updateBranchActiveById($prf_id, $active);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "changeJobActiveStatus") {
               $prf_id = $_POST['prf_id'];
                $active = $_POST['active'];
                $result = $formObj->updateJobActiveById($prf_id, $active);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "changeNatActiveStatus") {
               $prf_id = $_POST['prf_id'];
                $active = $_POST['active'];
                $result = $formObj->updateNationalitiesActiveById($prf_id, $active);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "changePerActiveStatus") {
               $prf_id = $_POST['prf_id'];
                $active = $_POST['active'];
                $result = $formObj->updatePeriodActiveById($prf_id, $active);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "changeSubActiveStatus") {
               $prf_id = $_POST['prf_id'];
                $active = $_POST['active'];
                $result = $formObj->updateSubjectActiveById($prf_id, $active);
                echo json_encode($result);
            }
//          Profesional validation part
            if ($_POST['reqType'] == "checkProfession") {
                $per_name = $_POST['profesional_name'];
                $frm_id = $_POST['form_id'];
                $result = $formObj->professionalChcek($per_name, $frm_id);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "checkProfessionUpdate") {
                $per_name = $_POST['pfr_name'];
                $frm_id = $_POST['form_id'];
                $prf_id = $_POST['prf_id'];
                $result = $formObj->professionalUpdateChcek($per_name, $frm_id, $prf_id);
                echo json_encode($result);
            }
            // Branch Calidatiopn part
            if ($_POST['reqType'] == "checkBranch") {
                $per_name = $_POST['branch_name'];
                $frm_id = $_POST['form_id'];
                $result = $formObj->branchChcek($per_name, $frm_id);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "checkBranchUpdate") {
                $brn_name = $_POST['brn_name'];
                $brn_id = $_POST['brn_id'];
                $frm_id = $_POST['form_id'];
                $result = $formObj->branchUpdateChcek($brn_name, $frm_id, $brn_id);
                echo json_encode($result);
            }
            //Nationalities validation part
            if ($_POST['reqType'] == "checkNationalities") {
                $nat_name = $_POST['nationalities_name'];
                $frm_id = $_POST['form_id'];
                $result = $formObj->nationalitiesChcek($nat_name, $frm_id);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "checkNationalitiesUpdate") {
                $nat_name = $_POST['nat_name'];
                $nat_id = $_POST['nat_id'];
                $frm_id = $_POST['frm_id'];
                $result = $formObj->nationalitiesUpdateChcek($nat_name, $frm_id, $nat_id);
                echo json_encode($result);
            }

//          Period validation part
            if ($_POST['reqType'] == "checkPeriod") {
                $per_name = $_POST['period_name'];
                $frm_id = $_POST['form_id'];
                $result = $formObj->periodChcek($per_name, $frm_id);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "checkPeriodUpdate") {
                $per_name = $_POST['per_name'];
                $per_id = $_POST['per_id'];
                $frm_id = $_POST['frm_id'];
                $result = $formObj->periodUpdateChcek($per_name, $frm_id, $per_id);
                echo json_encode($result);
            }
            //          Subject validation part
            if ($_POST['reqType'] == "checkSubject") {
                $sub_name = $_POST['subject_name'];
                $result = $formObj->subjectChcek($sub_name);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "checkSubjectUpdate") {
                $sub_name = $_POST['sub_name'];
                $sub_id = $_POST['sub_id'];
                $result = $formObj->subjectUpdateChcek($sub_name, $sub_id);
                echo json_encode($result);
            }
            //          Job validation part
            if ($_POST['reqType'] == "checkJob") {
                $job_ID = $_POST['job_ID'];
                $result = $formObj->jobChcek($job_ID);
                echo json_encode($result);
            }
            if ($_POST['reqType'] == "checkJobUpdate") {
                $job_id = $_POST['job_id'];
                $job_name = $_POST['job_name'];
                $result = $formObj->jobUpdateChcek($job_id,$job_name);
                echo json_encode($result);
            }
        } else {
            if ($_GET['qs1'] === 'profession') {
                $professionData = $formObj->getProfessionData();

                $this->registry->template->professionData = $professionData;
                $this->registry->template->show('dashboard/edit/profession');
            }
            if ($_GET['qs1'] === 'branch') {
                $barnchData = $formObj->getBranchData();

                $this->registry->template->barnchData = $barnchData;
                $this->registry->template->show('dashboard/edit/branch');
            }
            if ($_GET['qs1'] === 'nationalities') {
                $nationalitiesData = $formObj->getNationalitiesData();

                $this->registry->template->nationalitiesData = $nationalitiesData;
                $this->registry->template->show('dashboard/edit/nationalities');
            }
            if ($_GET['qs1'] === 'period') {
                $periodData = $formObj->getPeriodData();

                $this->registry->template->periodData = $periodData;
                $this->registry->template->show('dashboard/edit/period');
            }
            if ($_GET['qs1'] === 'subject') {
                $subjectData = $formObj->getSubjectData();

                $this->registry->template->subjectData = $subjectData;
                $this->registry->template->show('dashboard/edit/subject');
            }
            if ($_GET['qs1'] === 'job') {
                $jobData = $formObj->getJobData();

                $this->registry->template->jobData = $jobData;
                $this->registry->template->show('dashboard/edit/job');
            }
        }
    }

}
