<html>
<?php

// initialisiere Variablen
include 'src/vars.php';

// If schleife, die $page aus der url laedt, falls page nicht leer oder ungueltig ist
// Falls ungueltig, $page ist error
if (isset($_GET["page"])) {
	if (file_exists('src/content/' . $_GET["page"] . '.php')) {
		$page = $_GET["page"];
	} else {
		$page = 'error';
	}
}

// baue head
include 'src/head.php';

//baue body
include 'src/body.php';

?>
</html>
