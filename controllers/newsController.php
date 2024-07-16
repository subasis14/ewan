<?php

Class newsController Extends baseController
{
    public function index()
    {
        $lang = 'eng';
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        $lanObj = new language();
        $output = $lanObj->getLanguage($lang);
        
     
        $this->registry->template->output=$output;
        
        $this->registry->template->show('news/news');
    }
}