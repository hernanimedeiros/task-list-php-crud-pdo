<?php
	$action = 'readTaskDangling';
	require './task_controller.php';
	include './includes/config.php';
?>
<!-- Standart html tags -->
<!DOCTYPE html>
<html lang="pt">
	<!-- Header -->
	<?php
		include './includes/head_tags.php';
		include './includes/link_top.php';
	?>
	<!-- Where the magic happen :) -->
	<body>
		<?php
			include './includes/navigation.php';
			include './includes/design_top.php';
		?>
		<!-- App -->
		<div class="container app">
			<div class="row">
				<!-- Side Navigation - Task State Selector -->
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item active"><a href="#">Tarefas pendentes</a></li>
						<li class="list-group-item"><a href="./new_task.php">Nova tarefa</a></li>
						<li class="list-group-item"><a href="./all_task.php">Todas tarefas</a></li>
					</ul>
				</div>
				<!-- Tasks container -->
				<div class="col-md-9">
					<div class="container page">
						<div class="row">
							<div class="col">
								<h4>Tarefas pendentes</h4>
								<hr />
								<!-- Tasks list -->
								<?php foreach($tasks as $index => $task) { ?>
									<div class="row mb-3 d-flex align-items-center tarefa">
										<!-- Task -->	
										<div class="col-sm-9" id="task_<?php echo $task->id ?>">
											<?php echo $task->task ?>
										</div>
										<!-- Icon -->
										<div class="col-sm-3 mt-2 d-flex justify-content-between">
											<i class="fas fa-trash-alt fa-lg text-danger" onclick="deleteTask(<?php echo $task->id ?>)"></i>
											<i class="fas fa-edit fa-lg text-info" onclick="updateTask(<?php echo $task->id ?>, '<?php echo $task->task ?>')"></i>
											<i class="fas fa-check-square fa-lg text-success" onclick="markTaskConcluded(<?php echo $task->id ?>)"></i>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer -->
		<?php
			include './includes/footer.php';
			include './includes/link_bottom.php';
		?>
	</body>
</html>