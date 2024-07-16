<?php

Class loginController Extends baseController {

    public function index() {
      
        $formObj = new Form();
        unset($_SESSION["email"]);
        unset($_SESSION["OTP"]);
        unset($_SESSION["logged"]);
       
        if ($_POST['ajax'] == 1) {
            if ($_POST['reqType'] == 'login') {
                $email = $_POST['email'];
                $passw = $_POST['password'];
                $result=$formObj->signin($email,$passw);
               session_start();
                   $_SESSION['logged']=true;
                   $_SESSION["email"]=$result[0]['Usr_Email'];
                echo json_encode($result);
            }
        } else {
            $this->registry->template->output = $output;

            $this->registry->template->show('login/login');
        }
    }

}
