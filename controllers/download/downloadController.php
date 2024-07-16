<?php

Class downloadController Extends baseController {

    public function index() {
        $name = $_GET['qs1'];
        $nameExten = $_GET['qs2'];
        if (isset($name)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/force-download');
            header("Content-Disposition: attachment; filename=\"" . basename($name . "." . $nameExten) . "\";");
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($name . "." . $nameExten));
            ob_clean();
            flush();
            readfile("assets/cv/" . $name . "." . $nameExten); //showing the path to the server where the file is to be download
            exit;
        } else {
            exit;
        }
    }

}
