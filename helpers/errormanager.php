<?php //
/*
Class is not created since classes are not loaded when the index catches the error
// Thus we approach it as primitive and easier method using plain function
//email sending is embedded in this file since , no class will be instantiated
function errorReport($last_error, $err_message, $err_file, $err_line) {


    $message = '<html><body>';
    $message .= '<img src="http://snphp.study.net/assets/img/sn-header-logo.png" alt="Error" />';
    $message .= '<table rules="all" style="border-color: #666; border: 1px solid;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Error:</strong> </td><td>Study.Net Error</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_SESSION['Usr_Email']) . "</td></tr>";
    $message .= "<tr><td><strong>Error Type:</strong> </td><td>" . strip_tags(substr($err_message, 0, strpos($err_message, ':'))) . "</td></tr>";
    $message .= "<tr><td><strong>Error Message:</strong> </td><td>" . strip_tags(substr($err_message, strpos($err_message, ':') + 1, strpos($err_message, "\\") - strpos($err_message, ':') - 1)) . "</td></tr>";
    $message .= "<tr><td><strong>Error File:</strong> </td><td>" . strip_tags($err_file) . "</td></tr>";
    $message .= "<tr><td><strong>Error Line:</strong> </td><td>" . strip_tags($err_line) . "</td></tr>";
    $message .= "<tr><td><strong>Error Description:</strong> </td><td>" . strip_tags($err_message) . "</td></tr>";
    $message .= "<tr><td><strong>Stack Trace:</strong> </td><td>" . implode('', $last_error) . "</td></tr>";
    $message .= "<tr><td><strong>Usr_ID:</strong> </td><td>" . $_SESSION["Usr_ID"] . "</td></tr>";
    $message .= "<tr><td><strong>Usr_Name:</strong> </td><td>" . $_SESSION["Usr_FName"] . " ". $_SESSION["Usr_LName"]."</td></tr>";
    $message .= "<tr><td><strong>Usr_Priv:</strong> </td><td>" . $_SESSION["Usr_Priv"] . "</td></tr>";
    $message .= "<tr><td><strong>Usr_Email:</strong> </td><td>" . $_SESSION["Usr_Email"] . "</td></tr>";
    $message .= "<tr><td><strong>Current School ID:</strong> </td><td>" . $_SESSION["cur_sch_id"] . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    //send mail
    ini_set('SMTP', 'mail.study.net');
    ini_set('smtp_port', 587);
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: errors@study.net";
    ini_set('sendmail_from', 'errors@study.net');
    $sendmail = mail('jaithra@mcgoodwin.com', 'Study Net Error', $message, $headers);
    $sendmail = mail('baldev@study.net', 'Study Net Error', $message, $headers);
    $sendmail = mail('arbaz@mcgoodwin.com', 'Study Net Error', $message, $headers);


}
*/