<?php
// Database connection
class Connection {
	// Database connection parameters
	private $host = '127.0.0.1';
	private $dbname = 'microframework';
	private $user = 'root';
	private $pass = '';
	// Connection
	public function connect() {
		try {
			// Try connection with database
			$connection = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"
			);
			// Return the link with database
			return $connection;

		} catch (PDOException $e) {
			echo '<p>'.$e->getMessege().'</p>';
		}
	}
}

?>
