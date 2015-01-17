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
	
	$LS = new LoginSystem();
	$LS->init();
	
	$msg = array();

	if(isset($_POST['act_login'])){
		$user=$_POST['login'];
		$pass=$_POST['pass'];
		if($user == "" || $pass==""){
			$msg = array("Error", "Username / Password Wrong !");
		}else{
			$login = $LS->login($user, $pass);
			if($login === false){
				$msg = array("Error", "Username / Password Wrong !");
			}else if(is_array($login) && $login['status'] == "blocked"){
				$msg = array("Error", "Too many login attempts. You can attempt login after ". $login['minutes'] ." minutes (". $login['seconds'] ." seconds)");
			}
		}
	}
	
	if(isset($_GET['logout'])){
		$LS->logout();
	}
	  
	if($LS->loggedIn){
	  // If user is logged in show the homepage template.
	  include_once 'inc/templates/home.php';
	}else{
	  // if user is not logged in show the login page.
	  include_once 'inc/templates/login.php';
	}
	  
?>

