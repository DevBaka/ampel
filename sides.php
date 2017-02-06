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
		case "login":
			include("templates/login.php");
			break;
		case "logout":
			include("templates/logout.php");
			break;
		case "register":
			include("templates/register.php");
			break;
		case "willkommen":
			include("templates/willkommen.php");
			break;
		case "session":
			include("templates/sessions.php");
			break;
		case "sessionAmpel":
			include("templates/sessionsAmpel.php");
			break;
		case "weihnachtskalender":
			include("templates/wkalender.php");
			break;


		case "ipLogin":
			include("templates/ipLogin.php");
			break;
		case "ipReg":
			include("templates/ipReg.php");
			break;
		case "ipLog":
			include("templates/ipLog.php");
			break;

        default:
            include("templates/Start.php");
            break;
			
    }


?>
