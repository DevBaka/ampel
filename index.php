<!DOCTYPE html>
<html>
<head>
	<title>Ampel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<section>
<h1> Ampel</h1>
<div id="ampel1" class="Ampel1">
	<div id="red1" >
	</div>
	<div id="yellow1" >
	</div>
	<div id="green1" >
	</div>
</div>
<form method="POST">
	<input type="submit" name="enter" value="Pressed" id="btn" class="Ampel1">
</form>
<?php
	require_once("sql.php");

	$_db = new MyDB();
	echo $_db->baka();


	if($_POST['enter']){
		echo "hello world";		
	}


	
?>



</section>
</body>
</html>
