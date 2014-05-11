<?php
	class dbConnection{
		private $host	= 'localhost';		// Hostname der Datenbank
		private $user	= 'root';			// Username für Datenbank
		private $pwd	= 'root';				// Passwort für Datenbank
		private $db		= 'cis';		// Datenbank Name
	
		private $connection;
		
		public function __construct(){
			$this->connect();
		}
		private function connect(){
			$connection = mysql_connect ($this->host, $this->user, $this->pwd) or die ("keine Verbindung möglich. Benutzername oder Passwort sind falsch");
			mysql_select_db($this->db) or die ("Die Datenbank existiert nicht.");
		}
		public function getConnection(){
			return $connection;
		}
	}
?>