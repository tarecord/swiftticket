<?php
	include_once 'inc/authcheck.php';	  
	
	$page = $_GET['p'];
	echo $page;
	if ($LS->loggedIn){
	  // If user is logged in.
	  if (file_exists("inc/templates/$page.php")) {
		  include_once "inc/templates/$page.php";
	  }else{
		  include_once 'inc/templates/404.php';
	  }
	} else {
	  // if user is not logged in show the login page.
	  include_once 'inc/templates/login.php';
	}
?>