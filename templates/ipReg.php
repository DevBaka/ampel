<?php
/**
 * Created by PhpStorm.
 * User: devbaka
 * Date: 2/3/17
 * Time: 7:45 AM
 */


?>

<form name="ipRegister" method="post" ?><br />
    <div id="lblIPReg"/>
        <p class="ipReg">Name:<br /></p>
        <p class="ipReg">Email:<br /></p>
        <p class="ipReg">Passwort:<br /></p>
        <p class="ipReg">Passwort wiederholen:<br /></p>
    </div>
    <div id="iIPReg"/>
        <input type="text" name="name" id="ipname"  required /><br />
        <input type="text" name="email" id="ipemail"  required /><br />
        <input type="password" name="password1" id="ipPasswd1"  required /><br />
        <input type="password" name="password2" id="ipPasswd2"  required /><br />

    </div>
    <br />
    <input type="submit" value="Senden" />
</form>

<?php

    if($_POST){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password1 = password_hash($_POST["password1"], PASSWORD_DEFAULT);
        $password2 = password_hash($_POST["password2"], PASSWORD_DEFAULT);

        echo($name . $email . $password1. $password2);
        
        $host ="localhost";
        $user = "devside";
        $passwd = "BaKaxY?3347";
        $db = "Ampel";

        $mysqli = new mysqli($host,$user,$passwd,$db);
        if($mysqli->connect_errno){
            die("Verbindung fehlgeschlagen: ". $mysqli->connect_error);
        }
        echo("<br />". $mysqli ->server_info . "<br />");
        $stmt = $mysqli->prepare("SELECT * FROM users");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_object()){
            echo($row);
        }
        echo("RESULT: " . $result->fetch_object());
    }

?>
