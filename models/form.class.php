<?php

class Form {

    function getAdminEmail() {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "select Usr_Email from admin";
            //for binding the data to the place holder
            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
//            var_dump($email);die();
            return $data;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getAdminUserData($email) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "select * from admin where Usr_Email=?";
            //for binding the data to the place holder
            $data = array($email);
            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
//            var_dump($email);die();
            return $data;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updatePassword($email, $pass) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE admin SET Usr_Password=? WHERE Usr_Email=? ";
            //for binding the data to the place holder
            $data = array(MD5($pass), $email);
            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function signin($email, $pass) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "select * from admin where Usr_Email='" . $email . "' and Usr_Password='" . MD5($pass) . "'";
            
//             var_dump($sql);die();
            //for binding the data to the place holder
//            $data = array($email,);
            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $data = $result->fetchAll(PDO::FETCH_ASSOC);

            return $data;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function emailChcekExists($email) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "select Usr_Email from admin where Usr_Email=?";
            //for binding the data to the place holder
            $data = array($email);
            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
//            var_dump($data);die();
            return $data;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function insertProfessionalFieldData($Prf_Name, $Prf_Form_ID) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "INSERT INTO profession (Prf_Name,Prf_Form_ID) 
                     VALUES ('" . $Prf_Name . "','" . $Prf_Form_ID . "')";
            //for binding the data to the place holder
            $data = array();
            //call the function for executing the query
            $result = $database->execute($sql);

            return true;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function insertBranchFieldData($Brn_Name, $Brn_Form_ID) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "INSERT INTO branch (Brn_Name,Brn_Form_ID) 
                     VALUES ('" . $Brn_Name . "','" . $Brn_Form_ID . "')";
            //for binding the data to the place holder
            $data = array();
            //call the function for executing the query
            $result = $database->execute($sql);

            return true;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function insertNationalitiesFieldData($nationalities_Name, $nationalities_Form_ID) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "INSERT INTO nationalities (Nat_Name,Nat_Form_ID) 
                     VALUES ('" . $nationalities_Name . "','" . $nationalities_Form_ID . "')";
            //for binding the data to the place holder
            $data = array();
            //call the function for executing the query
            $result = $database->execute($sql);

            return true;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function insertPeriodFieldData($period_Name, $period_Form_ID) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "INSERT INTO period (Per_Name,Per_Form_ID) 
                     VALUES ('" . $period_Name . "','" . $period_Form_ID . "')";
            //for binding the data to the place holder
            $data = array();
            //call the function for executing the query
            $result = $database->execute($sql);

            return true;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function insertJobFieldData($job_ID, $job_position, $job_location, $job_type, $job_Description) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "INSERT INTO job (Job_Name ,Job_Position,Job_Location,Job_Type,Job_Description) 
                     VALUES ('" . $job_ID . "','" . $job_position . "','" . $job_location . "','" . $job_type . "','" . $job_Description . "')";
            //for binding the data to the place holder
            $data = array();
            //call the function for executing the query
            $result = $database->execute($sql);

            return true;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function insertSubjectFieldData($subject_name) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "INSERT INTO subject (Sub_Name) 
                     VALUES ('" . $subject_name . "')";
            //for binding the data to the place holder
            $data = array();
            //call the function for executing the query
            $result = $database->execute($sql);

            return true;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function insertContactFormData($fistName, $family_name, $email, $mobile, $select_subject, $w3review) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "INSERT INTO contactform (Usr_FName,Usr_FMName,Usr_Email,Usr_Mobile,Usr_Subject,Usr_Message) 
                     VALUES ('" . $fistName . "','" . $family_name . "','" . $email . "','" . $mobile . "','" . $select_subject . "','" . $w3review . "')";
            //for binding the data to the place holder
            $data = array();
            //call the function for executing the query
            $result = $database->execute($sql);

            return true;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function insertCorporateformData($fistName, $family_name, $email, $mobile, $gender, $profession, $city, $nationalities, $requiredPeriod) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "INSERT INTO corporateform (Usr_FName,Usr_FMName,Usr_Email,Usr_Mobile,Usr_Gender,Usr_Professional,Usr_Branch,Usr_Nationalities,Usr_Require_Period) 
                     VALUES ('" . $fistName . "','" . $family_name . "','" . $email . "','" . $mobile . "','" . $gender . "','" . $profession . "','" . $city . "','" . $nationalities . "','" . $requiredPeriod . "')";
            //for binding the data to the place holder
            $data = array();

            //call the function for executing the query
            $result = $database->execute($sql);

            return true;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function insertIndividualFormData($fistName, $family_name, $email, $mobile, $gender, $profession, $city, $nationalities, $requiredPeriod) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "INSERT INTO individualform (Usr_FName,Usr_FMName,Usr_Email,Usr_Mobile,Usr_Gender,Usr_Professional,Usr_Branch,Usr_Nationalities,Usr_Require_Period) 
                     VALUES ('" . $fistName . "','" . $family_name . "','" . $email . "','" . $mobile . "','" . $gender . "','" . $profession . "','" . $city . "','" . $nationalities . "','" . $requiredPeriod . "')";
            //for binding the data to the place holder
            $data = array();

            //call the function for executing the query
            $result = $database->execute($sql);

            return true;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function insertHealthcareFormData($fistName, $family_name, $email, $mobile, $gender, $profession, $city, $nationalities, $requiredPeriod) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "INSERT INTO healthcareform (Usr_FName,Usr_FMName,Usr_Email,Usr_Mobile,Usr_Gender,Usr_Professional,Usr_Branch,Usr_Nationalities,Usr_Require_Period) 
                     VALUES ('" . $fistName . "','" . $family_name . "','" . $email . "','" . $mobile . "','" . $gender . "','" . $profession . "','" . $city . "','" . $nationalities . "','" . $requiredPeriod . "')";
            //for binding the data to the place holder
            $data = array();

            //call the function for executing the query
            $result = $database->execute($sql);

            return true;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function insertJobEnquiryFormData($fistName, $family_name, $email, $mobile, $cvPath, $comment, $job_id) {

        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "INSERT INTO ourteamform (Usr_FName,Usr_FMName,Usr_Email,Usr_Mobile,Usr_Cv_Path,Usr_Comment,Job_ID) 
                     VALUES ('" . $fistName . "','" . $family_name . "','" . $email . "','" . $mobile . "','" . $cvPath . "','" . $comment . "','" . $job_id . "')";
            //for binding the data to the place holder
            $data = array();

            //call the function for executing the query
            $result = $database->execute($sql);

            return true;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getNotificationData() {
        try {

            $data = [];
            // single database instance
            $db = db::getInstance();
            //database object is created with the connection properties passed to constructor.
            $database = new database($db);

            $ourteamformSql = "SELECT *, 'ourteamform' as tableName
                    FROM ourteamform where seen=0";
            $contactformSql = "SELECT * , 'contactform' as tableName
                    FROM contactform  where seen=0";
            $corporateformSql = "SELECT * , 'corporateform' as tableName
                    FROM corporateform  where seen=0";
            $healthcareformSql = "SELECT * , 'healthcareform' as tableName
                    FROM healthcareform  where seen=0";
            $individualformSql = "SELECT *, 'individualform' as tableName 
                    FROM individualform  where seen=0";

            //call the function for executing the query
            //result of the database          
            $ourteamformresult = $database->execute($ourteamformSql);
            //fetching the result based on associate array type
            $ourteamform_result = $ourteamformresult->fetchAll(PDO::FETCH_ASSOC);


            $contactformresult = $database->execute($contactformSql);
            //fetching the result based on associate array type
            $contactform_result = $contactformresult->fetchAll(PDO::FETCH_ASSOC);


            $corporateformresult = $database->execute($corporateformSql);
            //fetching the result based on associate array type
            $corporate_result = $corporateformresult->fetchAll(PDO::FETCH_ASSOC);

            $healthcareformresult = $database->execute($healthcareformSql);
            //fetching the result based on associate array type
            $healthcare_result = $healthcareformresult->fetchAll(PDO::FETCH_ASSOC);

            $individualformresult = $database->execute($individualformSql);
            //fetching the result based on associate array type
            $individual_result = $individualformresult->fetchAll(PDO::FETCH_ASSOC);

//            $totalSectorCount = $corporate_result[0] + $healthcare_result[0] + $individual_result[0];

            array_push($data, $ourteamform_result, $contactform_result, $corporate_result, $healthcare_result, $individual_result);

            return $data;
        } catch (Exception $ex) {
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'getUserSchoolOrg');
        }
    }

    function getFormDataCounter() {
        try {

            $data = [];
            // single database instance
            $db = db::getInstance();
            //database object is created with the connection properties passed to constructor.
            $database = new database($db);

            $ourteamformSql = "SELECT count(*) 
                    FROM ourteamform";
            $contactformSql = "SELECT count(*) 
                    FROM contactform";
            $corporateformSql = "SELECT count(*) 
                    FROM corporateform";
            $healthcareformSql = "SELECT count(*) 
                    FROM healthcareform";
            $individualformSql = "SELECT count(*) 
                    FROM individualform";

            //call the function for executing the query
            //result of the database

            $ourteamformresult = $database->execute($ourteamformSql);
            //fetching the result based on associate array type
            $ourteamform_result = $ourteamformresult->fetch(PDO::FETCH_NUM);

            $contactformresult = $database->execute($contactformSql);
            //fetching the result based on associate array type
            $contactform_result = $contactformresult->fetch(PDO::FETCH_NUM);

            $corporateformresult = $database->execute($corporateformSql);
            //fetching the result based on associate array type
            $corporate_result = $corporateformresult->fetch(PDO::FETCH_NUM);

            $healthcareformresult = $database->execute($healthcareformSql);
            //fetching the result based on associate array type
            $healthcare_result = $healthcareformresult->fetch(PDO::FETCH_NUM);

            $individualformresult = $database->execute($individualformSql);
            //fetching the result based on associate array type
            $individual_result = $individualformresult->fetch(PDO::FETCH_NUM);

            $totalSectorCount = $corporate_result[0] + $healthcare_result[0] + $individual_result[0];

            array_push($data, $ourteamform_result[0], $contactform_result[0], $totalSectorCount);

            return $data;
        } catch (Exception $ex) {
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'getUserSchoolOrg');
        }
    }

    function jobUpdateChcek($job_id, $job_name) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM job where Job_Name=? and Job_ID!=?";
            //for binding the data to the place holder
            $data = array($job_name, $job_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetch(PDO::FETCH_NUM);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function subjectUpdateChcek($sub_name, $sub_id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM subject where Sub_Name=? and Sub_ID!=?";
            //for binding the data to the place holder
            $data = array($sub_name, $sub_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetch(PDO::FETCH_NUM);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function periodUpdateChcek($per_name, $frm_id, $per_id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM period where Per_Name=? and Per_Form_ID=? and Per_ID!=?";
            //for binding the data to the place holder
            $data = array($per_name, $frm_id, $per_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetch(PDO::FETCH_NUM);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function nationalitiesUpdateChcek($nat_name, $frm_id, $nat_id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM nationalities where Nat_Name=? and Nat_Form_ID=? and Nat_ID!=?";
            //for binding the data to the place holder
            $data = array($nat_name, $frm_id, $nat_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetch(PDO::FETCH_NUM);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function branchUpdateChcek($prf_name, $frm_id, $prf_id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM branch where Brn_Name=? and Brn_Form_ID=? and Brn_ID!=?";
            //for binding the data to the place holder
            $data = array($prf_name, $frm_id, $prf_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetch(PDO::FETCH_NUM);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function professionalUpdateChcek($prf_name, $frm_id, $prf_id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM profession where Prf_Name=? and Prf_Form_ID=? and Prf_ID!=?";
            //for binding the data to the place holder
            $data = array($prf_name, $frm_id, $prf_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetch(PDO::FETCH_NUM);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function professionalChcek($prf_name, $frm_id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM profession where Prf_Name=? and Prf_Form_ID=?";
            //for binding the data to the place holder
            $data = array($prf_name, $frm_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetch(PDO::FETCH_NUM);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function branchChcek($brn_name, $frm_id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM branch where Brn_Name=? and Brn_Form_ID=?";
            //for binding the data to the place holder
            $data = array($brn_name, $frm_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetch(PDO::FETCH_NUM);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function nationalitiesChcek($nat_name, $frm_id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM nationalities where Nat_Name=? and Nat_Form_ID=?";
            //for binding the data to the place holder
            $data = array($nat_name, $frm_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetch(PDO::FETCH_NUM);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function jobChcek($job_ID) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM job where Job_Name=?";
            //for binding the data to the place holder
            $data = array($job_ID);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetch(PDO::FETCH_NUM);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function subjectChcek($sub_name) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM subject where Sub_Name=?";
            //for binding the data to the place holder
            $data = array($sub_name);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetch(PDO::FETCH_NUM);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function periodChcek($per_name, $frm_id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM period where Per_Name=? and Per_Form_ID=?";
            //for binding the data to the place holder
            $data = array($per_name, $frm_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetch(PDO::FETCH_NUM);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

   function getProfessionDataForFrontEnd($form_id = null) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT prf.Prf_id as prf_id, prf.Prf_Name as profession_name, prf.isDeleted as active, frm.Frm_Name as form_name,frm.Frm_ID as frm_id FROM profession as prf left join form as frm on prf.Prf_Form_ID=frm.Frm_ID where frm.Frm_ID=$form_id and prf.isDeleted=0 order by profession_name";
            //for binding the data to the place holder
//            if (isset($form_id)) {
//                $sql = $sql . "";
//            }
//            $sql = $sql . "  order by profession_name";

            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }
    function getBranchDataForFrontEnd($form_id = null) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT brn.Brn_ID as Brn_id, brn.Brn_Name as barnch_name, frm.Frm_Name as form_name,brn.isDeleted as active,frm.Frm_ID as frm_id FROM branch as brn left join form as frm on brn.Brn_Form_ID=frm.Frm_ID where frm.Frm_ID=$form_id and brn.isDeleted=0 order by barnch_name";
            //for binding the data to the place holder
          
//            var_dump($sql);die();
            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }
    function getNationalitiesDataForFrontEnd($form_id = null) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT nat.Nat_ID as nat_id, nat.Nat_Name as nationalities_name,nat.isDeleted as active, frm.Frm_Name as form_name,frm.Frm_ID as frm_id FROM nationalities as nat left join form as frm on nat.Nat_Form_ID=frm.Frm_ID where frm.Frm_ID=$form_id and nat.isDeleted=0 order by nationalities_name";
           

            //for binding the data to the place holder
//            $data = array($form_id);
            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }
    function getPeriodDataForFrontEnd($form_id = null) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT per.Per_ID as per_id, per.Per_Name as per_name, per.isDeleted as active, frm.Frm_Name as form_name,frm.Frm_ID as frm_id FROM period as per left join form as frm on per.Per_Form_ID=frm.Frm_ID where frm.Frm_ID=$form_id and per.isDeleted=0 order by per_name";

         
//            $data = array($form_id);
            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }
    function getProfessionData($form_id = null) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT prf.Prf_id as prf_id, prf.Prf_Name as profession_name, prf.isDeleted as active, frm.Frm_Name as form_name,frm.Frm_ID as frm_id FROM profession as prf left join form as frm on prf.Prf_Form_ID=frm.Frm_ID ";
            //for binding the data to the place holder
            if (isset($form_id)) {
                $sql = $sql . "where frm.Frm_ID=$form_id";
            }
            $sql = $sql . "  order by profession_name";

            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getPeriodData($form_id = null) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT per.Per_ID as per_id, per.Per_Name as per_name, per.isDeleted as active, frm.Frm_Name as form_name,frm.Frm_ID as frm_id FROM period as per left join form as frm on per.Per_Form_ID=frm.Frm_ID ";

            if (isset($form_id)) {
                $sql = $sql . "where frm.Frm_ID=$form_id";
            }
            $sql = $sql . "  order by per_name";
//            $data = array($form_id);
            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getBranchData($form_id = null) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT brn.Brn_ID as Brn_id, brn.Brn_Name as barnch_name, frm.Frm_Name as form_name,brn.isDeleted as active,frm.Frm_ID as frm_id FROM branch as brn left join form as frm on brn.Brn_Form_ID=frm.Frm_ID";
            //for binding the data to the place holder
            if (isset($form_id)) {
                $sql = $sql . " where frm.Frm_ID=$form_id";
            }
            $sql = $sql . "  order by barnch_name";
//            var_dump($sql);die();
            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getNationalitiesData($form_id = null) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT nat.Nat_ID as nat_id, nat.Nat_Name as nationalities_name,nat.isDeleted as active, frm.Frm_Name as form_name,frm.Frm_ID as frm_id FROM nationalities as nat left join form as frm on nat.Nat_Form_ID=frm.Frm_ID";
            if (isset($form_id)) {
                $sql = $sql . " where frm.Frm_ID=$form_id";
            }
            $sql = $sql . "  order by nationalities_name";


            //for binding the data to the place holder
//            $data = array($form_id);
            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getFormFieldData() {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM form";
            //for binding the data to the place holder
            $data = array();

            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getCorporateformData() {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT *,'corporateform' as tableName FROM corporateform as corp LEFT join profession as prf on corp.Usr_Professional=prf.Prf_ID left join branch as brn on corp.Usr_Branch=brn.Brn_ID left join nationalities as nat on corp.Usr_Nationalities=nat.Nat_ID left join period as per on corp.Usr_Require_Period=per.Per_ID";
            //for binding the data to the place holder
            $data = array();

            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getIndividualFormData() {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT *,'individualform' as tableName FROM individualform as indv LEFT join profession as prf on indv.Usr_Professional=prf.Prf_ID left join branch as brn on indv.Usr_Branch=brn.Brn_ID left join nationalities as nat on indv.Usr_Nationalities=nat.Nat_ID left join period as per on indv.Usr_Require_Period=per.Per_ID";
            //for binding the data to the place holder
            $data = array();

            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getHealthcareformFormData() {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT *,'healthcareform' as tableName FROM healthcareform as corp LEFT join profession as prf on corp.Usr_Professional=prf.Prf_ID left join branch as brn on corp.Usr_Branch=brn.Brn_ID left join nationalities as nat on corp.Usr_Nationalities=nat.Nat_ID left join period as per on corp.Usr_Require_Period=per.Per_ID";
            //for binding the data to the place holder
            $data = array();

            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getProfessionDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM profession WHERE Prf_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getBranchDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM branch  WHERE Brn_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getNationalitiesDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM nationalities  WHERE Nat_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getPeriodDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM period  WHERE Per_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getSubjectDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM subject  WHERE Sub_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getJobDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM job  WHERE Job_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getJobDataForFrontEnd() {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM job where isDeleted=0 order by Job_Name ";
            //for binding the data to the place holder
            $data = array();

            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }
    function getJobData() {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM job order by Job_Name";
            //for binding the data to the place holder
            $data = array();

            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getSubjectDataForFrontEnd() {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM subject where isDeleted=0 order by Sub_Name";
            //for binding the data to the place holder
            $data = array();

            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }
    
    function getSubjectData() {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM subject order by Sub_Name";
            //for binding the data to the place holder
            $data = array();

            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateContactUsStatusById($status, $id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE contactform SET status=? WHERE Usr_ID=? ";
            //for binding the data to the place holder
            $data = array($status, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateOurTeamStatusById($status, $id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE ourteamform SET status=? WHERE Usr_ID=? ";
            //for binding the data to the place holder
            $data = array($status, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateIndividualStatusById($status, $id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE individualform SET status=? WHERE Usr_ID=? ";
            //for binding the data to the place holder
            $data = array($status, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateHealthcareStatusById($status, $id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE healthcareform SET status=? WHERE Usr_ID=? ";
            //for binding the data to the place holder
            $data = array($status, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateCorporateStatusById($status, $id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE corporateform SET status=? WHERE Usr_ID=? ";
            //for binding the data to the place holder
            $data = array($status, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateSubjectActiveById($prf_id, $active) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE subject SET isDeleted=? WHERE Sub_ID=? ";
            //for binding the data to the place holder
            $data = array($active, $prf_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }
    function updatePeriodActiveById($prf_id, $active) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE period SET isDeleted=? WHERE Per_ID=? ";
            //for binding the data to the place holder
            $data = array($active, $prf_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateNationalitiesActiveById($prf_id, $active) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE nationalities SET isDeleted=? WHERE Nat_ID=? ";
            //for binding the data to the place holder
            $data = array($active, $prf_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateJobActiveById($prf_id, $active) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE job SET isDeleted=? WHERE Job_ID=? ";
            //for binding the data to the place holder
            $data = array($active, $prf_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateBranchActiveById($prf_id, $active) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE branch SET isDeleted=? WHERE Brn_ID=? ";
            //for binding the data to the place holder
            $data = array($active, $prf_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateProfessionActiveById($prf_id, $active) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE profession SET isDeleted=? WHERE Prf_ID=? ";
            //for binding the data to the place holder
            $data = array($active, $prf_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateProfessionDataById($prf_name, $id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE profession SET Prf_Name=? WHERE Prf_ID=? ";
            //for binding the data to the place holder
            $data = array($prf_name, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateBranchDataById($brn_name, $id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE branch SET Brn_Name=? WHERE Brn_ID=? ";
            //for binding the data to the place holder
            $data = array($brn_name, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateNationalitiesDataById($nat_name, $id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE nationalities SET Nat_Name=? WHERE Nat_ID=? ";
            //for binding the data to the place holder
            $data = array($nat_name, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updatePeriodDataById($per_name, $id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE period SET Per_Name=? WHERE Per_ID=? ";
            //for binding the data to the place holder
            $data = array($per_name, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateJobDataById($job_id, $job_name, $job_position, $job_location, $job_type, $job_Description) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE job SET Job_Name=?,Job_Position=?,Job_Location=?,Job_Type=?,Job_Description=? WHERE Job_ID=? ";
            //for binding the data to the place holder
            $data = array($job_name, $job_position, $job_location, $job_type, $job_Description, $job_id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateSubjectDataById($per_name, $id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE subject SET Sub_Name=? WHERE Sub_ID=? ";
            //for binding the data to the place holder
            $data = array($per_name, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function deleteCorporateDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "DELETE FROM corporateform WHERE Usr_ID=? ";

            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function deleteContactDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "DELETE FROM contactform WHERE Usr_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function deleteJobEnquiryDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "DELETE FROM ourteamform WHERE Usr_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function deleteIndividualDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "DELETE FROM individualform WHERE Usr_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function deleteHealthcareDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "DELETE FROM healthcareform WHERE Usr_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function deleteProfessionDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "DELETE FROM profession WHERE Prf_ID=? and NOT exists ( select Usr_ID from corporateform cor where cor.Usr_Professional =?)AND NOT exists ( select Usr_ID from healthcareform hel where hel.Usr_Professional =?)AND NOT exists ( select Usr_ID from individualform indv where indv.Usr_Professional =?)";
            //for binding the data to the place holder
            $data = array($id, $id, $id, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
//          $database rowCount();
            $assoc_result = $result->rowCount(PDO::FETCH_NUM);
            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function deleteBranchDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "DELETE FROM branch WHERE Brn_ID=? and NOT exists ( select Usr_ID from corporateform cor where cor.Usr_Branch =?)AND NOT exists ( select Usr_ID from healthcareform hel where hel.Usr_Branch =?)AND NOT exists ( select Usr_ID from individualform indv where indv.Usr_Branch =?)";
            //for binding the data to the place holder
            $data = array($id, $id, $id, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
//          $database rowCount();
            $assoc_result = $result->rowCount(PDO::FETCH_NUM);
            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function deleteNationalitiesDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "DELETE FROM nationalities WHERE Nat_ID=? and NOT exists ( select Usr_ID from corporateform cor where cor.Usr_Nationalities =?)AND NOT exists ( select Usr_ID from healthcareform hel where hel.Usr_Nationalities =?)AND NOT exists ( select Usr_ID from individualform indv where indv.Usr_Nationalities =?)";
            //for binding the data to the place holder
            $data = array($id, $id, $id, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            $assoc_result = $result->rowCount(PDO::FETCH_NUM);
            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function deletePeriodDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "DELETE FROM period WHERE Per_ID=? and NOT exists ( select Usr_ID from corporateform cor where cor.Usr_Require_Period =?)AND NOT exists ( select Usr_ID from healthcareform hel where hel.Usr_Require_Period =?)AND NOT exists ( select Usr_ID from individualform indv where indv.Usr_Require_Period =?)";
            //for binding the data to the place holder
            $data = array($id, $id, $id, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            $assoc_result = $result->rowCount(PDO::FETCH_NUM);
            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function deleteJobDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "DELETE FROM job WHERE Job_ID=? and NOT exists ( select Usr_ID from ourteamform our where our.Job_ID =?)";
            //for binding the data to the place holder
            $data = array($id, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            $assoc_result = $result->rowCount(PDO::FETCH_NUM);
            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function deleteSubjectDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "DELETE FROM subject WHERE Sub_ID=? and NOT exists ( select Usr_ID from contactform con where con.Usr_Subject =?)";
            //for binding the data to the place holder
            $data = array($id, $id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            $assoc_result = $result->rowCount(PDO::FETCH_NUM);
            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getIndividualDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT *,'individualform' as tableName FROM individualform as corp LEFT join profession as prf on corp.Usr_Professional=prf.Prf_ID left join branch as brn on corp.Usr_Branch=brn.Brn_ID left join nationalities as nat on corp.Usr_Nationalities=nat.Nat_ID left join period as per on corp.Usr_Require_Period=per.Per_ID where corp.Usr_ID=?";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getHealthcareDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT *,'healthcareform' as tableName FROM healthcareform as corp LEFT join profession as prf on corp.Usr_Professional=prf.Prf_ID left join branch as brn on corp.Usr_Branch=brn.Brn_ID left join nationalities as nat on corp.Usr_Nationalities=nat.Nat_ID left join period as per on corp.Usr_Require_Period=per.Per_ID where corp.Usr_ID=?";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getCorporateformDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT *,'corporateform' as tableName FROM corporateform as corp LEFT join profession as prf on corp.Usr_Professional=prf.Prf_ID left join branch as brn on corp.Usr_Branch=brn.Brn_ID left join nationalities as nat on corp.Usr_Nationalities=nat.Nat_ID left join period as per on corp.Usr_Require_Period=per.Per_ID where corp.Usr_ID=?";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getOurTeamFormDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT *,'ourteamform' as tableName FROM ourteamform as team left join job as job on team.Job_ID=job.Job_ID  WHERE team.Usr_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getContactFormDataId($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT *,'contactform' as tableName FROM contactform as con left join subject as sub on con.Usr_Subject=sub.Sub_ID where Usr_ID=?";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getOurTeamFormData() {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM ourteamform as team left join job as job on team.Job_ID=job.Job_ID";
            //for binding the data to the place holder
            $data = array();

            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getContactFormData() {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT * FROM contactform as con left join subject as sub on con.Usr_Subject=sub.Sub_ID";
            //for binding the data to the place holder
            $data = array();

            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function getAllSectorData() {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "SELECT *,'corporateform' as tableName FROM corporateform as corp LEFT join profession as prf on corp.Usr_Professional=prf.Prf_ID left join branch as brn on corp.Usr_Branch=brn.Brn_ID left join nationalities as nat on corp.Usr_Nationalities=nat.Nat_ID left join period as per on corp.Usr_Require_Period=per.Per_ID 
                    UNION ALL
                    SELECT *,'individualform' as tableName FROM individualform as indv LEFT join profession as prf on indv.Usr_Professional=prf.Prf_ID left join branch as brn on indv.Usr_Branch=brn.Brn_ID left join nationalities as nat on indv.Usr_Nationalities=nat.Nat_ID left join period as per on indv.Usr_Require_Period=per.Per_ID
                    UNION ALL
                    SELECT *,'healthcareform' as tableName FROM healthcareform as health LEFT join profession as prf on health.Usr_Professional=prf.Prf_ID left join branch as brn on health.Usr_Branch=brn.Brn_ID left join nationalities as nat on health.Usr_Nationalities=nat.Nat_ID left join period as per on health.Usr_Require_Period=per.Per_ID";
            //for binding the data to the place holder
            $data = array();

            //call the function for executing the query
            $result = $database->execute($sql);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);

            return $assoc_result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateCorporateformSeenDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE corporateform SET seen=1 WHERE Usr_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateIndividualformSeenDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE individualform SET seen=1 WHERE Usr_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updatehealthcareformSeenDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE healthcareform SET seen=1 WHERE Usr_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updatecontactformSeenDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE contactform SET seen=1 WHERE Usr_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

    function updateourteamformSeenDataById($id) {
        try {
            // single database instance
            $db = db::getInstance();

            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query inserting new user data
            $sql = "UPDATE ourteamform SET seen=1 WHERE Usr_ID=? ";
            //for binding the data to the place holder
            $data = array($id);

            //call the function for executing the query
            $result = $database->execute($sql, $data);

            return $result;
        } catch (Exception $ex) {
            print_r($ex);
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'userRegistration');
        }
    }

}
