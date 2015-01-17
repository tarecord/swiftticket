<?php
	
/**
* This file handles connecting to the database.
*/


/**
*
*
*/
class Db {
     
  public function __construct(){}
   
  private function dbconnect() {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD)
      or die ("<br/>Could not connect to MySQL server");

	  mysqli_select_db($conn, DB_DB)
        or die ("<br/>Could not select the indicated database");
     
    return $conn;
  }
  
	public function db_query($sql) {
	
		$conn = $this->dbconnect();
		
		$res = mysqli_query($conn, $sql);
		
		if ($res){
		  if (strpos($sql,'SELECT') === false){
		    return true;
		  }
		}
		else{
		  if (strpos($sql,'SELECT') === false){
		    return false;
		  }
		  else{
		    return null;
		  }
		}
		
		$results = mysqli_fetch_array($res);
		
		while ($row = mysqli_fetch_array($res)){
		
		  $result = new DbResult;
		
		  foreach ($row as $k=>$v){
		    $result->$k = $v;
		  }
		
		  $results[] = $result;
		}
		return $results;        
	}

	public function db_insert($sql) {
		
		$conn = $this->dbconnect();
		
		$res = mysqli_query($conn, $sql);
		
		if($res){
			return 'The ticket has been successfully created';
		} else {
			return 'Error';
		}
		
	}

}

class DbResult {
 
  private $_results = array();
 
  public function __construct(){}
 
  public function __set($var,$val){
    $this->_results[$var] = $val;
  }
 
  public function __get($var){  
    if (isset($this->_results[$var])){
      return $this->_results[$var];
    }
    else{
      return null;
    }
  }
}

?>