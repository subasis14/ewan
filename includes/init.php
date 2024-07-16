<?php

/* * * include the controller class ** */
include_once __SITE_PATH . '/application/' . 'controller_base.class.php';

/* * * include the registry class ** */
include_once __SITE_PATH . '/application/' . 'registry.class.php';

/* * * include the router class ** */
include_once __SITE_PATH . '/application/' . 'router.class.php';

/* * * include the template class ** */
include_once __SITE_PATH . '/application/' . 'template.class.php';



spl_autoload_register(function ($class_name) {
    /* * * auto load model classes ** */

    $filename = strtolower($class_name) . '.class.php';
    $models = __SITE_PATH . '/models/' . $filename;
    $helpers = __SITE_PATH . '/helpers/' . $filename;
    
    //check the file is either in helpers or models
   //check controller or helper to include automatically
    if(file_exists($models) == true ) {
        include_once($models);
    }
    elseif(file_exists($helpers) == true ){
        include_once($helpers);
    }else{
        return false;
    }
    
});

/* * * a new registry object ** */
$registry = new registry;

/* * * create the database registry object ** */
// $registry->db = db::getInstance();
//golbal data file include
include_once __SITE_PATH. '/includes/' . 'globaldata.php';
?>
