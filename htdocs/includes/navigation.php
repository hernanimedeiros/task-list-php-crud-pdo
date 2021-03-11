<?php
	// Put your php code here
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end fixed-top nav-mystyle">
	<!-- Logo -->
	<a class="nav-link" href="./">
		<small style="color:whitesmoke">
			<span>LISTA D<i class="fas fa-tasks" style="color:#ffbd00"></i>&nbspTAREFAS&nbsp made with&nbsp</span>
			<i class="fas fa-heart" style="color:#E1674D"></i>&nbspin&nbsp
			<i class="fab fa-php" style="font-size:1.5rem"></i>	
		</small>
	</a>
	<!-- Navbar icon -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
	<!-- Links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link <?php if ($CURRENT_PAGE == "index") {?>active<?php }?>" href="./index.php"><i class='fas fa-home'></i></a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if ($CURRENT_PAGE == "about") {?>active<?php }?>" href="./about.php">Sobre</a>
			</li>
		</ul>
	</div>
</nav>
