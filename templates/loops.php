<h1> Kontrollstrukturen in PHP: switch </h1>
<article>
<?php
for($i=10; $i>=0; $i=$i-1){
	switch ($i){
		case 10:
			echo "<b> 10 Punkte</b>: Sehr gut<br \>";
			break;
		case 9:
			echo "<b> 9 Punkte</b>: Gut <br \>";
			break;
		case 8:
			echo "<b>8 Punkte</b>: Befriedigend <br \>";
			break;
		case 7:
			echo "<b>7 Punkte</b>: Ausreichend <br \>";
			break;
		case ($i < 7):
			echo "<b>weniger als 7</b>: Leider zu wenig Punkte erreicht<br \>";
			break;
	}
}
?>
</article>
