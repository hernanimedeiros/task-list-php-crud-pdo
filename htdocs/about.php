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
	<!-- Propaganda time! -->
	<body id="socio">
		<?php
			include './includes/navigation.php';
			include './includes/design_top.php';
		?>
		<div id="socialMedia" class="col-sm-6 mx-auto">
			<div class="p-3">	
				<div class="row">
					<div id="contatosSquares" class="col-6 text-center box-business">
						<a href="https://www.facebook.com/hernanifelixmedeiros/">
							<i class="fab fa-facebook contacts-icons"></i>
						</a>
					</div>
					<div id="contatosSquares" class="col-6 text-center box-business">
						<a href="https://api.whatsapp.com/send?phone=351900000000&text=Deixe-nos%20a%20sua%20mensagem.%20Obrigado%20pela%20prefer%C3%AAncia">
							<i class="fab fa-whatsapp contacts-icons"></i>
						</a>
					</div>
				</div>
				<div class="row">
					<div id="contatosSquares" class="col-6 text-center box-business">
						<a href="mailto:hernanifelixmedeiros@gmail.pt?Subject=Hello%20Hernani">
							<i class="fas fa-at contacts-icons"></i>
						</a>
					</div>
					<div id="contatosSquares" class="col-6 text-center box-business">
						<a href="https://www.linkedin.com/in/hernanimedeiros/">
							<i class="fab fa-linkedin contacts-icons"></i>
						</a>
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