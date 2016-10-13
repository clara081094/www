<?php
class Bd{

    private $sqlite;
    private $sqliteDebug = true;

    function Bd() {
        try {
        	// connect to your database
        	$this->sqlite = new SQLite3('/var/lib/asterisk/agi-bin/ex1');
    	}
    	catch (Exception $exception) {
        	// sqlite3 throws an exception when it is unable to connect
        	echo "There was an error connecting to the database!";
        	if ($this->sqliteDebug) {
            		echo $exception->getMessage();
        	}
	}
    }

   function consultaFila($query){

	$sqliteResult = $this->sqlite->query($query);
	$conjunto = array();
	if ($sqliteResult) {
        	// the query was successful
        	// get the result (if any)
        	// fetchArray returns FALSE if there is no record
        	if ($record = $sqliteResult->fetchArray()) {
            		// we have a record so now we can use it
            		while($record){
			     array_push($conjunto, $record);
			     $record = $sqliteResult->fetchArray();
			}
			return $conjunto;
        	}else {
            		return null;
        	}
        	// when you are done with the result, finalize it
        	$sqliteResult->finalize();
    	}else{
		echo "Error de consulta";
		return null;
	}
   }

   function ingresarLinea($query) {
	$sqliteResult=$this->sqlite->query($query);
	echo "\nPaso";
	if ($sqliteResult) {
                // the query was successful
                // get the result (if any)
                // fetchArray returns FALSE if there is no record
                echo "Se inserto";
                // when you are done with the result, finalize it
                $sqliteResult->finalize();
        }else{
                echo "Error de consulta";
        }

   }

}
?>

