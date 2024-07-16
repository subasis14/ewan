<?php

Class contactController Extends baseController
{
    public function index()
    {
        $lang = 'eng';
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }else{
            $_SESSION['lang']='ar';
        }
        $lanObj = new language();
        $output = $lanObj->getLanguage($lang);
        
     
        $this->registry->template->output=$output;
        
        $this->registry->template->show('contact/contact');
    }
}