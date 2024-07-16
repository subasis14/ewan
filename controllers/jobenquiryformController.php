<?php

Class jobenquiryformController Extends baseController {

    public function index() {
        $lang = 'eng';
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        $lanObj = new language();
        $output = $lanObj->getLanguage($lang);
        $formObj = new Form();
       $emailObj = new email();
       $adminEmail=$formObj->getAdminEmail();

            if ($_POST['ajax'] == 1) {
                if ($_POST['reqType'] == 'insertJobEnquiryForm') {
                 $temp_name="";
                 $file_name="";
                $cvPath = "";
                $allowedExts = array("pdf", "doc", "docx");
                $temp = explode(".", $_FILES["file"]["name"]);
                $extension = end($temp);
                if (($_FILES["file"]["type"] == "application/pdf") || ($_FILES["file"]["type"] == "application/msword") || ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") && ($_FILES["file"]["size"] < 20000000) && in_array($extension, $allowedExts) && ($_FILES["file"]["size"] < 200000) && in_array($extension, $allowedExts)) {
                    if ($_FILES["file"]["error"] > 0) {
                        return false;
                    } else {
                        if (move_uploaded_file($_FILES["file"]["tmp_name"], 'assets/cv/' . $_FILES["file"]['name'])) {
                            $temp_name=$_FILES["file"]["tmp_name"];
                            $file_name=$_FILES["file"]['name'];
                            $cvPath = 'assets/cv/' . $_FILES["file"]['name'];
                        }
                    }
                } else {
                    return false;
                }
                $fistName = $_POST['first_name'];
                $family_name = $_POST['family_name'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $job_id = $_POST['select_job'];
                $comment = $_POST['w3review'];
                
                $job_text=$_POST['select_job_text'];

                

                 $result = $formObj->insertJobEnquiryFormData($fistName, $family_name, $email, $mobile, $cvPath, $comment,$job_id);
                if ($result) {
                    $userSubject = "Acknowledgment from Ewam Team";
                    $adminSubject = "New Enquiry from Job Enquiry";
                    $adminBody = nl2br("Find the following details below\nFirst Name:" . $fistName . "\nLast Name:" . $family_name . "\nEmail:" . $email . "\nMobile Number:" . $mobile . "\nJob Name:" . $job_text . "\nComment:" . $comment . "\n<img alt='PHPMailer' width='160px' src='http://karnatakahub.com/assets/images/logo.png'>\n");
                    $userBody = nl2br("Dear " . $fistName . "\nGreetings from Ewan Recruitment! Thank you for contacting us.\nWe have received your enquiry. One of our relationship managers will get in touch with you for more details, within the next 24-48 hours\nShould it be urgent, you can reach us directly on Phone at +966 11 4 7777 02 & Email at <a href='mailto:info@ewanintl.sa' target='_blank'>info@ewanintl.sa</a>.\n\nThank you\n<img alt='PHPMailer' width='160px' src='http://karnatakahub.com/assets/images/logo.png'>\n<a href='http://www.ewanintl.sa' target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://www.ewanintl.sa&amp;source=gmail&amp;ust=1600269440357000&amp;usg=AFQjCNHRLOJAaMqLl3KYUDdknL_69q9lmg'>www.ewanintl.sa</a>");
                    $emailObj->newMail($adminEmail[0]['Usr_Email'], $adminSubject, $adminBody,$cvPath,$temp_name,$file_name);
                    $emailObj->newMail($email, $userSubject, $userBody);
                    echo true;
                } else {
                    echo false;
                }
            }
                if ($_POST['reqType'] == 'statusUpdate') {
                    $status = $_POST['status'];
                    $row_id = $_POST['rowId'];
                    $result = $formObj->updateOurTeamStatusById($status, $row_id);
                    echo json_encode($result);
                }
                if ($_POST['reqType'] == 'getSelectBoxData') {
                    $job_result = $formObj->getJobDataForFrontEnd();
                    echo json_encode($job_result);
                }
            // } 
            // else {
            //     $cvPath = "";
            //     $allowedExts = array("pdf", "doc", "docx");
            //     $temp = explode(".", $_FILES["file"]["name"]);
            //     $extension = end($temp);
            //     if (($_FILES["file"]["type"] == "application/pdf") || ($_FILES["file"]["type"] == "application/msword") || ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") && ($_FILES["file"]["size"] < 20000000) && in_array($extension, $allowedExts) && ($_FILES["file"]["size"] < 200000) && in_array($extension, $allowedExts)) {
            //         if ($_FILES["file"]["error"] > 0) {
            //             return false;
            //         } else {
            //             if (move_uploaded_file($_FILES["file"]["tmp_name"], 'assets/cv/' . $_FILES["file"]['name'])) {
            //                 $cvPath = 'assets/cv/' . $_FILES["file"]['name'];
            //             }
            //         }
            //     } else {
            //         return false;
            //     }

            //     $fistName = $_POST['first_name'];
            //     $family_name = $_POST['family_name'];
            //     $email = $_POST['email'];
            //     $mobile = $_POST['mobile'];
            //     $comment = $_POST['w3review'];
            //     $job_id=$_POST['select_job'];


            //     $result = $formObj->insertJobEnquiryFormData($fistName, $family_name, $email, $mobile, $cvPath, $comment,$job_id);

            //     if ($result) {
            //         echo "true";
            //     } else {
            //         echo "false";
            //     }
            // }
        } else {

            $this->registry->template->output = $output;

            $this->registry->template->show('jobenquiryform/jobenquiryform');
        }
    }

}
