<?php

class User
{
    // authentication of the user with username and password as the parameters
    function getUserInfo()
    {
        try {

            // single database instance
            $db = db::getInstance();
            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query with for checking user existence
            $sql = "SELECT * FROM user";
            //for binding the data to the place holder
            $data = array();
            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);
            //returning the result
            return $assoc_result;
        } catch (Exception $ex) {
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'getUserInfo');
        }
    }
}


