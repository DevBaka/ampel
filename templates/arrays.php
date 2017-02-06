<?php
/*
	for($i=0; $i<=3; $i++){
		$plan[0][$i] = "Java";
	}
	for($i=4; $i<=5; $i++){
		$plan[0][$i] = "PHP";
	}
	for($i=6; $i<=7; $i++){
		$plan[0][$i] = "LF04";
	}
	$plan[0][0] = "hello";
	$plan[0][1] = "world";
	for($i=0; $i<=1; $i++)[
		echo $plan[0][$i];
	}
*/
	$plan = array(
	array("Java", "Java", "Java", "Java", "PHP", "PHP", "KOW", "KOW"),
	array("Religion", "Religion", "PHP", "PHP", "Elektrotechnik", "Elektrotechnik", "Elektrotechnik", "Elektrotechnik"),
	array("Netzwerktechnik Theorie", "Netzwerktechnik Theorie", "Netzwerktechnik Theorie", "Netzwerktechnik Theorie", "Netzwerktechnik Praxis", "Netzwerktechnik Praxis", "Netzwerktechnik Praxis", "Netzwektechnik Praxis"),
	array("Deutsch", "Deutsch", "KOW", "KOW", "Kow", "kow", "kow", "kow"),
	array("Praxis", "PRaxis", "praxis", "Praxis", "Praxis", "Praxis")
	);
	$days = array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag");
	$timestamp = time();
	echo $timestamp;
	$datum = date("dm.Y - H:i", $timestamp);
	echo "<br \>" .$datum . "<br \>";
	$day = date("w");
	$rday =  $days[$day];
	echo $rday . " – " . $day;
?>
<table id="Stundenplan">
	<tr>
		<th><?php echo $rday; ?> </th>
		<th><?php echo $days[$day+1]; ?> </th>
	</tr>
<?php
	switch($day){
		case 0:
			echo "Sonntag";
			break;
		case 1:
			echo "Montag";
			break;
		case 2:
			for($i=0; $i<8; $i++){
				echo "<tr><td>" . $plan[1][$i] . "</td><td>" . $plan[2][$i] .  "</td></tr>" ;
			}
			break;
		case 3:
             for($i=0; $i<8; $i++){
                 echo "<tr><td>" . $plan[2][$i] . "</td><td>" . $plan[3][$i] .  "</td></tr>" ;
             }   
             break;
        case 4:
            for($i=0; $i<8; $i++){
                echo "<tr><td>" . $plan[3][$i] . "</td><td>" . $plan[4][$i] .  "</td></tr>" ;
            }
            break;
        case 5:
            for($i=0; $i<8; $i++){
                echo "<tr><td>" . $plan[4][$i] . "</td><td>" . $plan[5][$i] .  "</td></tr>" ;
            }
            break;
        case 6:
            for($i=0; $i<8; $i++){
                echo "<tr><td>" . $plan[5][$i] . "</td><td>" . $plan[6][$i] .  "</td></tr>" ;
            }
            break;
        case 7:
            for($i=0; $i<8; $i++){
                echo "<tr><td>" . $plan[6][$i] . "</td><td>" . $plan[7][$i] .  "</td></tr>" ;
            }
            break;
	}

?>
</table>
