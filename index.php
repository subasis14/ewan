<?php

error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 'On');

/*

function catch_fatal_error() {
    // Getting Last Error
    $last_error = error_get_last();
    $errortype = array (
        E_ERROR,
        E_WARNING,
        E_PARSE,
        E_CORE_ERROR,
        E_CORE_WARNING,
        E_COMPILE_ERROR,
        E_COMPILE_WARNING,
        E_USER_ERROR,
        E_USER_WARNING,
        E_USER_NOTICE,
        E_STRICT,
        E_RECOVERABLE_ERROR,
    );

    // Check if Last error is of type FATAL
    if (isset($last_error['type'])) {
        switch ($last_error['type']) {
            case 1://E_ERROR
            case 4://E_PARSE Compile-time parse errors
            case 16://E_CORE_ERROR
            case 32://E_CORE_WARNING
            case 64://E_COMPILE_ERROR
            case 256://E_USER_ERROR
            case 2048://E_STRICT
            case 4096://E_RECOVERABLE_ERROR
                //include the file which sends error
                include_once ('helpers/errormanager.php');
                // Fatal Error Occurs
                // Assemble  Errors and codes
                $err_message = $last_error['message'];
                $err_file = $last_error['file'];
                $err_line = $last_error['line'];
                //send the error
                //echo($err_message." ".$err_file." ".$err_line);
                errorReport($last_error,$err_message,$err_file,$err_line);
            case 2:
            case 8:
                # code...
                break;

            default:
                # code...
                break;
        }

    }

}
*/

register_shutdown_function('catch_fatal_error');
$expire = 31 * 24 * 3600; // We choose a one year duration

ini_set('session.gc_maxlifetime', $expire);
ini_set('session.cookie_domain', 'herald.trade');
session_start(); //We start the session

setcookie(session_name(), session_id(), time() + $expire);

/* * * define the site path ** */
$site_path = realpath(dirname(__FILE__));
define('__SITE_PATH', $site_path);
ini_set('memory_limit','-1');
/* * * include the init.php file ** */

include_once 'includes/init.php';

/* * * load the router ** */
$registry->router = new router($registry);

/* * * set the controller path ** */
$registry->router->setPath(__SITE_PATH . '/controllers');

/* * * load up the template ** */
$registry->template = new template($registry);

/* * * load the controller ** */
$registry->router->loader();



