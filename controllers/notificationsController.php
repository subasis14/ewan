<?php

Class notificationsController Extends baseController
{
    public function index()
    {
        $formObj = new Form();
        if ($_POST['ajax'] == 1) {
            if ($_POST['reqType'] == 'notificationsData') {
                $result = $formObj->getNotificationData();
                echo json_encode($result);
            }
        }
    }
}