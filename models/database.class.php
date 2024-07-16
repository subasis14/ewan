<?php

class database {

//    private $result;
    public $connection = '';
//    private $transactionStatus;
//    private static $instance;

    //constructor assigns the database object to connection.
    //if already the connections is established then it ignores it.
    function __construct($db) {

        if ($this->connection != NULL) {
            //do nothing since the databse connection has already been established and object has been recived
        } else {
            $this->connection = $db;
        }
    }

    //function executes statement and returns the data
    //function takes three arguments $statement (prepared statement object)
    // $data is Associative array which maps the data to the placeholder    
    function execute($sql, $data = null) {

        try {
            //create a PDOStatement object
            //commented out -- Baldev 07/08/2019 due to error displayed in front end
            //$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,"SET NAME'utf8'");
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $statement = $this->connection->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            //use the dynamic data and run the query
            $statement->execute($data);
        } catch (Exception $e) {
            $exceptionMessage = "<p>You tried to run this sql: $sql <p><p>Exception: $e</p>";
            trigger_error($exceptionMessage);
        }
        //return the PDOStatement object
        return $statement;
    }

    //optional function for transaction purposes
    //the transaction are started and comitted in the funcion    

    function query_transcation($transObj, $choice) {
        try {
            if ($choice == "newtransaction") {
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->connection->beginTransaction();
            } else if ($choice == "committransaction") {
                //$cnx->commit();//Baldev 3/1/2017
                $this->connection->commit();//Baldev 3/1/2017
            }
        } catch (Exception $e) {
            if (isset($cnx)) {
                $this->connection->rollback();
                error_log($e);
            }
        }
    }
//stored proc
    function sp_execute($sql,$parms=null,$value=null)
    {
        try {
            //create a PDOStatement object
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(':retval',$ReturnValue ,PDO::PARAM_INT|PDO::PARAM_INPUT_OUTPUT,4000);

            $count = sizeof($parms);
            if($count!=sizeof($value))
            {
                return 'Params and value mismatch';
            }
            if($count>0) {
                for ($i = 0; $i < $count; $i++) {
                    if(is_numeric($value[$i])) {
                        $statement->bindParam(':' . $parms[$i] . '', $value[$i], PDO::PARAM_INT);
                    }else {
                        $statement->bindParam(':' . $parms[$i] . '', $value[$i], PDO::PARAM_STR);
                    }
                }
            }
            $statement->execute();

        } catch (Exception $e) {
            $exceptionMessage = "<p>You tried to run this sql: $sql <p><p>Exception: $e</p>";
            //print_r($e);
            trigger_error($exceptionMessage);
        }
        //return the PDOStatement object
        return $statement;
    }


}
