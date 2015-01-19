<?php
	include_once 'settings.php';

	//Include the class files as they are needed.
	function __autoload($class_name)
		{
		  include_once 'inc/classes/' . $class_name . '.php';
		}
	
	//Initialize the Database Object.
	$db = new Db();
	
	$LS = new LoginSystem();
	$LS->init();
	
	if (isset($_GET['logout'])) {
		$LS->logout();
	}
?>