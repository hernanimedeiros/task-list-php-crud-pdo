<?php
// Task Model
class Task {

	private $id;
	private $id_status;
	private $task;
	private $register_date;
	// Get
	public function __get($attribute) {
		return $this->$attribute;
	}
	// Set
	public function __set($attribute, $value) {
		$this->$attribute = $value;
		return $this;
	}
}

?>
