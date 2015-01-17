<?php

//Swift Tickets is a bare bones ticketing system based on php.

//Include the class files as they are needed.
  function __autoload($class_name)
	  {
	      include_once 'inc/classes/' . $class_name . '.php';
	  }
	  
	  $db = new Db();
	  
	  $query = $db -> select("SELECT * FROM test");
?>