<?php

Class adminemailController Extends baseController {

    public function index() {
        $formObj=new Form();
        $data=$formObj->getAdminEmail();
        
        return json_encode($data);
    }

}
