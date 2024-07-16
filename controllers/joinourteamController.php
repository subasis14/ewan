<?php

Class joinourteamController Extends baseController
{
    public function index()
    {
        $lang = 'eng';
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        $lanObj = new language();
        $output = $lanObj->getLanguage($lang);
        $formObj = new Form();
        $jobData = $formObj->getJobDataForFrontEnd();

        $this->registry->template->jobData = $jobData;
     
        $this->registry->template->output=$output;
        
        $this->registry->template->show('joinourteam/joinourteam');
    }
}