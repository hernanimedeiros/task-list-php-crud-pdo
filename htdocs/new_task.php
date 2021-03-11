<?php
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
		<!-- Task insertion feedback -->
		<?php 
			// Test if insertion is set and if equal to 1
			if( isset($_GET['insertion']) && $_GET['insertion'] == 1 ) { ?>
			<div class="bg-success pt-2 text-white d-flex justify-content-center">
				<h5>Tarefa registada com sucesso!</h5>
			</div>
		<?php } ?>
		<!-- App -->
		<div class="container app">
			<div class="row">
				<!-- Side Navigation - Task State Selector -->
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
						<li class="list-group-item active"><a href="#">Nova tarefa</a></li>
						<li class="list-group-item"><a href="all_task.php">Todas tarefas</a></li>
					</ul>
				</div>
				<!-- Tasks container -->
				<div class="col-md-9">
					<div class="container page">
						<div class="row">
							<div class="col">
								<h4>Nova tarefa</h4>
								<hr />
								<!-- Tasks form -->
								<form method="post" action="task_controller.php?action=create">
									<div class="form-group">
										<label>Descrição da tarefa:</label>
										<input type="text" class="form-control" name="task" placeholder="Exemplo: Fazer relatório mensal">
									</div>
									<button class="btn btn-success">Salvar</button>
								</form>
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