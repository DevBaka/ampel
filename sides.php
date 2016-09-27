<?php
	
    switch($section)
    {
		case "Home":
			include("templates/Start.php");
			break;
   		case "Ampel2":
            include("templates/ampel2.php");
            break;
		case "Ampel":
            include("templates/ampel.php");
            break;
        case "Impressum":
            include("templates/Impressum.php");
            break;
		case "operatoren":
			include("templates/operatoren.php");
			break;
		case "loops":
			include("templates/loops.php");
			break;
		case "noten":
			include("templates/noten.php");
			break;
		case "arrays":
			include("templates/arrays.php");
			break;
        default:
            include("templates/Start.php");
            break;
			
    }


?>
