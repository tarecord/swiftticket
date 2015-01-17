<?php
	
/**
* Basic Ticket Class
* This handles creating the ticket
*/
class Ticket {
/* 
* This function creates the ticket with the provided variables.
*/
	public function __construct($requestor, $subject, $queue, $owner) {
		$this->requestor = $requestor;
		$this->subject = $subject;
		$this->queue = $queue;
		$this->owner = $owner;
	}
}


?>