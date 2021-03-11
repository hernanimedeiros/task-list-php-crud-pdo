<head>
	<title>
		<?php
			print $PAGE_TITLE;
		?>
	</title>
<!-- Dynamic Metatags -->
	<?php switch ($CURRENT_PAGE){
			// Setup meta tags for a specific view
			case "index":?>
				<meta name="description" content="index description">
				<meta name="keywords" content="index keywords"> 
				<?php break;
			case "about":?>
				<meta name="description" content="about description">
				<meta name="keywords" content="about keywords"> 
				<?php break;;
			default:?>
				<meta name="description" content="default description">
				<meta name="keywords" content="default keywords"> 
	<?php }?>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="hernani_medeiros">