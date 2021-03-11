<?php
	// Loading scripts
	require "../app/task.model.php";
	require "../app/task.service.php";
	require "../app/connection.php";

	// Attribute new value to action if a value is passed by GET
	$action = isset($_GET['action']) ? $_GET['action'] : $action;

	// Create task
	if($action == 'create' ) {
		// Instantiate the Model
		$task = new Task();
		// Set value to task
		$task->__set('task', $_POST['task']);
		// Instantiate a connection to database
		$connection = new Connection();
		// Instantiate the service to CRUD operations
		$taskService = new TaskService($connection, $task);
		// Initialize method
		$taskService->create();
		// Change path to indicate an insertion procedure
		header('Location: ./new_task.php?insertion=1');

	// Read task
	} else if($action == 'read') {

		$task = new Task();
		$connection = new Connection();
		$taskService = new TaskService($connection, $task);
		$tasks = $taskService->read();

	// Update task
	} else if($action == 'update') {

		$task = new Task();
		// Possible because return $this; statement on set
		$task->__set('id', $_POST['id'])
			->__set('task', $_POST['task']);

		$connection = new Connection();
		$taskService = new TaskService($connection, $task);
		$taskService->update();
		headerLocation();

	// Delete task
	} else if($action == 'delete') {

		$task = new Task();
		$task->__set('id', $_GET['id']);

		$connection = new Connection();
		$taskService = new TaskService($connection, $task);
		$taskService->delete();
		headerLocation();
	

	// Mark concluded tasks
	} else if($action == 'markTaskConcluded') {

		$task = new Task();
		// Set status as Concluded
		$task->__set('id', $_GET['id'])->__set('id_status', 2);

		$connection = new Connection();
		$taskService = new TaskService($connection, $task);
		$taskService->markTaskConcluded();
		headerLocation();
	

	// Read dangling tasks 
	} else if($action == 'readTaskDangling') {
		$task = new Task();
		//Set status as Dangling
		$task->__set('id_status', 1);
		$connection = new Connection();
		$taskService = new TaskService($connection, $task);
		$tasks = $taskService->readTaskDangling();
	}

	// Location
	function headerLocation() {
		if( isset($_GET['pag']) && $_GET['pag'] == 'index') {
			header('location: index.php');
		} else {
			header('location: all_task.php');
		}
	  }

?>