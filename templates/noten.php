<?php 
	$table = $db->note();

?>

<h1> Zensuren rechner  </h1>
<article>
<!--<input type="hidden" name="section" value="noten">-->
<form>
	<form id="Zensurenadd" method="POST"  >
		<input type="hidden" name="section" value="noten">
		<input type="number" name="gesamtpunkte" min="1" max="999"  value=<?php if($_GET["gesamtpunkte"]!= 0) {echo($_GET["gesamtpunkte"]);} else{echo(0);}?>> 
		<input type="number" name="erreichtepunkte" min="1" max="999" value=<?php if($_GET["erreichtepunkte"] != 0) {echo($_GET["erreichtepunkte"]);} else{echo(0);} ?>>
		<input type="submit" id="cmdZenfsur" name="cmdZensur" action="POST" value="Note Berechnen" />
	</form>
</form>
	<!-- <input type="submit" id="cmdZensur" name="cmdZensur" value="Note Berechnen"> -->
</article>
<h1> Ausrechnung der Zensur </h2>
<article>
<?php
	//if(isset($_POST['cmdZensur'])){
	//if($_SERVER['REQUEST_METHOD'] == 'POST'){
	//if(empty($_GET["gesamptpunkte"])){
	if($_GET["gesamtpunkte"] != 0){
		echo  "Gesamtpunkte: " . $_GET["gesamtpunkte"] . " Erreichte Punkte: " . $_GET["erreichtepunkte"];
		$gs = $_GET["gesamtpunkte"];
	}
	echo "</br>" . $gs;	
	if($table[3] >= $gs){
		echo "Sie haben mit " . $gs . " Punkten eine 6 erreicht.";
	}
	elseif($table[5] >= $gs && $table[4] <= $gs){
		echo "Sie haben mit " . $gs . " Punkten eine 5 erreicht.";
	}
	elseif($table[7] >= $gs && $table[6] <= $gs){
		echo "Sie haben mit " . $gs . " Punkten eine 4 erreicht.";
	}
	elseif($table[9] >= $gs && $table[7] <= $gs){
		echo "Sie haben mit " . $gs . " Punkten eine 3 ereicht. ";
	}
	elseif($table[11] >= $gs && $table[7] <= $gs){
		echo "Sie haben mit " . $gs . " Punkten eine 2 erreicht. ";
	}
	elseif($table[13] >= $gs && $table[12] <= $gs){
		echo "Sie haben mit " . $gs . " Punkten eine 1 erreicht. ";
	}

?>

<div id="notetable">
	<table>
		<tr>
			<th> Note </th>
			<th> Punkte </th>
			<th> Prozent </th>
		</tr>
		<tr>
			<th> 6 </th>
			<th> <?php echo $table[2] . " – " . $table[3]?> </th>
			<th> </th>
		</tr>
		<tr>
			<th> 5 </th>
			<th> <?php echo $table[4] . " – " . $table[5]?> </th>
			<th> </th>
		</tr>
		<tr>
			<th> 4 </th>
			<th> <?php echo $table[6] . " – " . $table[7]?> </th>
			<th>
		</tr>
		<tr>
			<th> 3 </th>
			<th> <?php echo $table[8] . " – " . $table[9]?> </th>
			<th> </th>
		</tr>
		<tr>
			<th> 2 </th>
			<th> <?php echo $table[10] . " – " . $table[11]?> </th>
			<th>
		</tr>
		<tr>
			<th> 1 </th>
			<th> <?php echo $table[12] . " – ". $table[13]?> </th>
			<th> </th>
		</tr>
	</table>
</div>

</article>
