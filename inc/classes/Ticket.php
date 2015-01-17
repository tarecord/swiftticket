<?php
	
/**
* Basic Ticket Class
* This handles creating tickets, updating tickets, and deleting tickets.
*/
class Ticket {

	private $_db;

/* 
* This function creates the ticket with the provided variables.
*/
	public function __construct(Db $db) {
		
		$this->_db = $db;
		
	}
	
	public function create($requestor, $subject, $queue, $owner) {
		
		$this->_db->db_insert("INSERT INTO tickets (requestor, subject, queue, owner) VALUES ('$requestor', '$subject', '$queue', '$owner');");
	
	}
}


?>