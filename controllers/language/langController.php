<?php

Class langController Extends baseController {

    public function index() {
        if ($_POST['ajax'] == 1) {
            if ($_POST['reqType'] == 'languageChnage') {
                $lang = $_POST['lang'];
                $_SESSION['lang'] = $lang;
                $path = parse_url($_SERVER['HTTP_REFERER']);
                $prevPath = $path['path'];
                header("Location:$prevPath");
            }
        }
    }

}
