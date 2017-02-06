<?php 
$a = 7;
$b = "30 Euro";
$c = "!";
?>
<h1>Werte von Variablen erkennen </h1>
<article>
<p>a) echo $a .$b .$c; sollte "730 Euro!" ausgeben.</p>
<?php
echo $a .$b .$c;
?>
<p>b) echo ""Text""; wird dafür sorgen, dass die gesamte Seite nicht mehr lädt. Wieso? Syntax Fehler. Wenn man ein Text ausgeben soll in "" verpackt gibt es zwei möglichkeiten.echo "'Text'" oder '"Text"';</p>
<?php echo '"Text"'; ?>
<p>c) echo "Text" .$a; sollte "Text7" ausgeben. </p>
<?php echo "Text" .$a; ?>
<p>d) echo "Text" $a .$b; Auch hier ist ein Systen-error.  Damit die Texte ausgegeben werden muss auch zwischen "Text" und $a ein . hin.</p>
<?php echo "Text" .$a .$b; ?>
<p>e) echo $a + $b + $c; Hierbei rechnet er immerhin die 7+30. Auch wenn 30 in einem String ist. </p>
<?php echo $a + $b + $c; ?>
<p>f) echo $a * $b / $c; gibt in dem fall garnichts aus. Wenn bei $c vor dem ! jedoch noch eine Zahl stehen würde, dann wird PHP mit dieser Rechnen.</p>
<?php echo $a * $b / $c;  ?>
<p>g) echo ('<b>\'Text\'</b>' .$a . " Text " . $b); </p>
<?php echo ('<b>\'Text\'</b>' .$a . " Text " . $b); ?>
</article>
<h1> Mit Variablen, Operatoren und Konstanten arbeiten </h1>
<article>
<?php
$bez_tisch = "Schreibtisch ";
$bez_stuhl = "Bürostuhl ";
$bez_lampe = "Lampe ";
$bez_pctisch = "Computertisch ";
$preis_tisch = 1999.00;
$preis_stuhl = 589.00;
$preis_lampe = 29.00;
$preis_pctisch = 999.00;
$brutto = "Brutto-Preis ";
$netto_gesamt = $preis_tisch + $preis_stuhl + $preis_lampe + $preis_pctisch;

function bruttopreis($preis){
	$tmp = $preis / 100;
	$tmp2 = $tmp * 19;
	$brutto = $tmp2 + $preis;
	return $brutto;
}

$brutto_gesamt = bruttopreis($netto_gesamt);

echo "Netto-Gesamtpreis der eingekauften Artikel: " . $netto_gesamt . " Euro <br \>";
echo "Brutto-Gesamtpreis der eingekauften Artikel: " . $brutto_gesamt . " Euro <hr \>";
echo $brutto . "<b>" .$bez_tisch ."</b>" . bruttopreis($preis_tisch) . " Euro <br \>";
echo $brutto . "<b>" .  $bez_stuhl . "</b>" .  bruttopreis($preis_stuhl) . " Euro <br \>";
echo $brutto . "<b>" .  $bez_lampe . "</b>" . bruttopreis($preis_lampe) . " Euro <br \>";
echo $brutto . "<b>" .  $bez_pctisch . "</b>" . bruttopreis($preis_pctisch) . " Euro <br \>";

?>

</article>
