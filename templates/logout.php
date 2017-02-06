<?php

	echo("Auf Wiedersehen " . $_SESSION['user'] . "! Wir hoffen, Sie besuchen uns schon bald wieder.");
	session_unset();
?>
