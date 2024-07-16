<?php

Class logoutController Extends baseController {

    public function index() {
        unset($_SESSION["email"]);
        unset($_SESSION["OTP"]);
        unset($_SESSION["logged"]);
// remove all session variables
        session_unset();

// destroy the session
        session_destroy();
        $this->registry->template->show('login/login');
    }

}
