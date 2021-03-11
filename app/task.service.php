<?php

// Class to serve CRUD operations in database
class TaskService {

	private $connection;
	private $task;

	// Constructor with typed parameters
	public function __construct(Connection $connection, Task $task) {
		// Link to database
		$this->connection = $connection->connect();
		// Task to CRUD
		$this->task = $task;
	}
	// Create
	public function create() {
		// Query
		$query = 'insert into task_list(task) values(:task)';
		// Statement to prevent SQL injection
		$stmt = $this->connection->prepare($query);
		// Store value to database (value, connection)
		$stmt->bindValue(':task', $this->task->__get('task'));
		$stmt->execute();
	}
	// Read
	public function read() {
		$query = '
			select
				t.id, s.status, t.task
			from
				task_list as t
				left join task_status as s on (t.id_status = s.id)
		';
		$stmt = $this->connection->prepare($query);
		$stmt->execute();
		// Return a array of object. The standart is an array of arrays
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
	// Update
	public function update() {

		$query = "update task_list set task = ? where id = ?";
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(1, $this->task->__get('task'));
		$stmt->bindValue(2, $this->task->__get('id'));
		return $stmt->execute();
	}
	// Delete
	public function delete() {

		$query = 'delete from task_list where id = :id';
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(':id', $this->task->__get('id'));
		$stmt->execute();
	}
	// Mark completed
	public function markTaskConcluded() {
		// n questions marks as bindValue parameters
		$query = "update task_list set id_status = ? where id = ?";
		$stmt = $this->connection->prepare($query);
		// First bindValue parameter
		$stmt->bindValue(1, $this->task->__get('id_status'));
		// First bindValue parameter
		$stmt->bindValue(2, $this->task->__get('id'));
		return $stmt->execute();
	}
	// Mark Dangling
	public function readTaskDangling() {
		$query = '
			select
				t.id, s.status, t.task
			from
				task_list as t
				left join task_status as s on (t.id_status = s.id)
			where
				t.id_status = :id_status
		';
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(':id_status', $this->task->__get('id_status'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}

?>
