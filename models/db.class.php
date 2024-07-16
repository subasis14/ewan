<?php

class db{

/*** Declare instance ***/
private static $instance = NULL;

/**
*
* the constructor is set to private so
* so nobody can create a new instance using new
*
*/
private function __construct() {
  /*** maybe set the db name here later ***/
}
private function __destruct() {
  /*** maybe set the db name here later ***/
}

/**
*
* Return DB instance or create intitial connection
*
* @return object (PDO)
*
* @access public
*
*/
public static function getInstance() {
	$user="root";
	$pass="";
        
	$host='localhost';
        $dbname='ewandatabase';
        $dsn = 'mysql:host='.$host.';dbname='.$dbname.';';
        
    if (!self::$instance)
    	{
            print_r(self::$instance);

            try{
            	self::$instance = new PDO($dsn, $user, $pass);
                self::$instance->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                self::$instance-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
            	    $e->getMessage();
         	}
    	}
    return self::$instance;
}

/**
*
* Like the constructor, we make __clone private
* so nobody can clone the instance
*/
private function __clone(){
}

public static function closeCon ( )
    {
        try
        {
            self::$instance = null;
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }


    }


} /*** end of class ***/
