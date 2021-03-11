<?php
	// Recieve the script name (absolute pathname of the currently executing script) and attribute a page and a title
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/about.php":
			$CURRENT_PAGE = "about"; 
			$PAGE_TITLE = "Alguma informação extra";
			break;	
		default:
			$CURRENT_PAGE = "index";
			$PAGE_TITLE = "Lista Tarefas, desenvolvido em PHP com amor";
	}
?>