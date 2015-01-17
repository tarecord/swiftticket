<?php

//Swift Tickets is a bare bones ticketing system based on php.

include_once 'settings.php';

//Include the class files as they are needed.
  function __autoload($class_name)
	  {
	      include_once 'inc/classes/' . $class_name . '.php';
	  }
	  
	  //Initialize the Database Object.
	  $db = new Db();
	  
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Swift Ticket</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		
	</head>
	<body>
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</body>
</html>