<?php


class General
{
//to get all countries
    function getCountries()
    {
        try {

            // single database instance
            $db = db::getInstance();
            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query with for checking user existence
//            $sql='{:retval = CALL MA_GetAllCountries () }';
//            $params=[];
//            $value=[];
            $sql = "SELECT  Ctry_ID, Ctry_Name 
                    FROM _Countries
                    WHERE Ctry_ID NOT IN (233,40)
                    ORDER BY Ctry_Name";

            //for binding the data to the place holder
            $data = array();
            //call the function for executing the query
            //result of the database

            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);
            //returning the result
            return $assoc_result;
        } catch (Exception $ex) {
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'getUserSchoolOrg');
        }
    }

    //to get states from country ID
    function getStates($countryID)
    {
        try {

            // single database instance
            $db = db::getInstance();
            //database object is created with the connection properties passed to constructor.
            $database = new database($db);
            //sql query with for checking user existence
//            $sql='{:retval = CALL MA_GetAllStatesByCtryID (:Ctry_ID) }';
//            $params=['Ctry_ID'];
//            $value=[$countryID];
            $sql = "SELECT StateCode, StateName FROM _States WHERE Ctry_ID=? ORDER BY StateName ";

            $data = array($countryID);
            //call the function for executing the query
            //result of the database

            $result = $database->execute($sql, $data);
            //fetching the result based on associate array type
            $assoc_result = $result->fetchAll(PDO::FETCH_ASSOC);
            //returning the result
            return $assoc_result;
        } catch (Exception $ex) {
            $errorObj = new errormanager();
            $errorObj->senderror($ex, 'getUserSchoolOrg');
        }
    }
}
