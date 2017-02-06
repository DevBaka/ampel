<?php 
	//$table = $db->note();
	//$tables = $db->notetables();
	//$tableall = $db->notes();
?>

<h1> Zensuren rechner  </h1>
<!--<input type="hidden" name="section" value="noten">-->
<form name="notes" action="index.php?section=noten" method="post">
	<label>Notentabelle :
	<select name="notentablesWahl" id="notentables" size="<?php $notentables[0]; ?>" />

<?php

    $notentables = array(
            "BG11", "BG12"
    );

    $tableBG11 = array(
            "0" => "100",
            "1" => "89",
            "2" => "76",
            "3" => "63",
            "4" => "50",
            "5" => "20",
            "6" => "0"
    );

    $tableBG12 = array(
            "0" => "0",
            "1" => "20",
            "2" => "28",
            "3" => "34",
            "4" => "40",
            "5" => "45",
            "6" => "50",
            "7" => "55",
            "8" => "60",
            "9" => "65",
            "10" => "70",
            "11" => "75",
            "12" => "80",
            "13" => "85",
            "14" => "90",
            "15" => "95",
            "16" => "100"
    );


	for($i=0; $i< count($notentables); $i++){
		echo "<option>" . $notentables[$i] . "</option>";
	}

    function calcPunkte($grund, $prozent){
        $prozentD = $prozent / 100 ;
        $punkte = $grund * $prozentD;
        return $punkte;
    }

    function calcProzent($punkte, $pcap){
        $one = $punkte / $pcap;
        $two = $one * 100;
        return $two;
    }

    function calcRProzent($grundwert, $prozentwert){
        $one = $grundwert * $prozentwert;
        return $one;
    }
?>
	</select>
	</label>
    <br \>
<p id="gesamtpoints"> Erreichte Punkte </p> 
<p id="erreichtepoints">Gesamtpunkte </p>


		<input type="hidden" name="section" value="noten">
        <br \>
        <input id="erreichtepunkte"  type="number" name="erreichtepunkte" min="1" max="9999" value=<?php if($_GET["erreichtepunkte"] != 0) {echo($_GET["erreichtepunkte"]);} else{echo(0);} ?>>
       von
    <input id="gesamtpunkte" type="number" name="gesamtpunkte" min="1" max="9999"  value=<?php if($_GET["gesamtpunkte"]!= 0) {echo($_GET["gesamtpunkte"]);} else{echo(0);}?>>

         Punkten.<br \>

		<input type="submit" id="cmdZenfsur" name="cmdZensur" action="POST" value="Note Berechnen" />
	</form>
</form>
	<!-- <input type="submit" id="cmdZensur" name="cmdZensur" value="Note Berechnen"> -->



<?php
	//if(isset($_POST['cmdZensur'])){
	//if($_SERVER['REQUEST_METHOD'] == 'POST'){
	//if(empty($_GET["gesamptpunkte"])){
	if($_POST["gesamtpunkte"]) {
        echo "<p id='lblGesamtPunkte'><b>Gesamtpunkte: </b>" . $_POST["gesamtpunkte"] . "</p><p id='lblErreichtePunkte'> <b>Erreichte Punkte: </b>" . $_POST["erreichtepunkte"] . "</p>";
        $gs = $_POST["gesamtpunkte"];
        echo("<h1> Ausrechnung der Zensur </h1>");
        $prozent = calcProzent($_POST["erreichtepunkte"], $_POST["gesamtpunkte"]);
        echo("<br \><b> Erreichte Prozent:  </b>" . $prozent . "%<br \> <b> Erreichte Punkte: </b>"  . $_POST["erreichtepunkte"]);


        if ($_POST["notentablesWahl"] == "BG11") {
            if ($tableBG11[6] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent eine 6 erreicht.";
            } elseif ($tableBG11[5] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent eine 5 erreicht.";
            } elseif ($tableBG11[4] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent eine 4 erreicht.";
            } elseif ($tableBG11[3] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent eine 3 ereicht. ";
            } elseif ($tableBG11[2] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent eine 2 erreicht. ";
            } elseif ($tableBG11[1] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent eine 1 erreicht. ";
            }


        } elseif ($_POST["notentablesWahl"] == "BG12") {
            if ($tableBG11[0] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 0 Punkte erreicht.";
            } elseif ($tableBG12[1] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 1 Punkte erreicht.";
            } elseif ($tableBG12[2] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 2 Punkte erreicht.";
            } elseif ($tableBG12[3] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 3 Punkte erreicht. ";
            } elseif ($tableBG12[4] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 4 Punkte erreicht. ";
            } elseif ($tableBG12[5] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 5 Punkte erreicht. ";
            } elseif ($tableBG12[6] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 6 Punkte erreicht.";
            } elseif ($tableBG12[7] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 7 Punkte erreicht";
            } elseif ($tableBG12[8] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 8 Punkte erreicht.";
            } elseif ($tableBG12[9] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 9 Punkte erreicht. ";
            } elseif ($tableBG12[10] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 10 Punkte erreicht. ";
            } elseif ($tableBG12[11] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 11 Punkte erreicht. ";
            } elseif ($tableBG12[12] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 12 Punkte erreicht. ";
            } elseif ($tableBG12[13] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 13 Punkte erreicht. ";
            } elseif ($tableBG12[14] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 14 Punkte erreicht. ";
            } elseif ($tableBG12[15] >= $prozent) {
                echo "Sie haben mit " . $prozent . " Prozent 15 Punkte erreichtt. ";
            }

        }



        ?>

        <div id="notetable">
            <table>
                <tr>
                    <?php

                    if ($_POST["notentablesWahl"] == "BG11"){
                        echo("
                    <th> Note</th>
                    <th> Punkte</th>
                    <th> Prozent</th>"
                        );
                    }

                    elseif ($_POST["notentablesWahl"] == "BG12"){
                        echo("
                            <th> Punktezahl</th>
                            <th> Punkte</th>
                            <th> Prozent</th>
                        ");
                    }

                    ?>
                </tr>

                <?php
                if ($_POST["notentablesWahl"] == "BG12"){


                    ?>

                    <tr>
                        <th> 15</th>
                        <th>
                            <?php
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG12["16"]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12["15"]);
                            ?>
                        </th>
                        <th>
                            <?php echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["16"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["15"])) ); ?>
                        </th>
                    </tr>
                    <tr>
                        <th> 14</th>
                        <th>
                            <?php
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG12["15"]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12["14"]);
                            ?>
                        </th>
                        <th>

                            <?php echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["15"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["14"])) ); ?>
                        </th>
                    </tr>
                    <tr>
                        <th>13</th>
                        <th>
                            <?php
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG12[14]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12[13]);
                            ?>
                        </th>
                        <th>
                            <?php echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["14"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["13"])) ); ?>
                        </th>
                    </tr>
                    <tr>
                        <th>12</th>
                        <th>
                            <?php
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG12[13]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12[12]);
                            ?>
                        </th>
                        <th>
                            <?php echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["13"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["12"])) ); ?>
                        </th>
                    </tr>
                    <tr>
                        <th>11</th>
                        <th>
                            <?php
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG12[12]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12[11]);
                            ?>
                        </th>
                        <th>
                            <?php echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["12"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["11"])) ); ?>
                        </th>
                    </tr>

                    <tr>
                        <th> 10</th>
                        <th>
                            <?php
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG12[11]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12[10]);
                            ?>
                        </th>
                        <th>
                            <?php echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["11"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["10"])) ); ?>
                        </th>
                    </tr>

                    <tr>
                        <th> 9</th>
                        <th>
                            <?php
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG12[10]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12[9]);
                            ?>
                        </th>
                        <th>
                            <?php echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["10"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["9"])) ); ?>
                        </th>
                    </tr>

                    <tr>
                        <th> 8</th>
                        <th>
                            <?php
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG12[9]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12[8]);
                            ?>
                        </th>
                        <th>
                            <?php echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["9"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["8"])) ); ?>
                        </th>
                    </tr>


                    <tr>
                        <th> 7</th>
                        <th>
                            <?php
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG12[8]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12[7]);
                            ?>
                        </th>
                        <th>
                            <?php echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["8"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["7"])) ); ?>
                        </th>
                    </tr>


                    <?php
                }

                ?>

                <tr>
                    <th> 6</th>
                    <th>
                        <?php
                            if ($_POST["notentablesWahl"] == "BG11") {
                                echo calcPunkte($_POST["gesamtpunkte"], $tableBG11[6]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG11[5]);
                            }
                            elseif($_POST["notentablesWahl"] == "BG12"){
                                echo calcPunkte($_POST["gesamtpunkte"], $tableBG12[7]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12[6]);
                            }
                        ?>
                    </th>
                    <th><?php
                        if ($_POST["notentablesWahl"] == "BG11") {
                            echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG11["6"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG11["5"])));
                        }
                        elseif($_POST["notentablesWahl"] == "BG12"){
                         echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["7"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["6"])));
                         }
                         ?>
                    </th>
                </tr>
                <tr>
                    <th> 5</th>
                    <th>
                        <?php
                        if ($_POST["notentablesWahl"] == "BG11") {
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG11[5]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG11[4]);
                        }
                        elseif($_POST["notentablesWahl"] == "BG12"){
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG12[6]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12[5]);
                        }
                        ?>
                    </th>
                    <th>
                        <?php
                        if ($_POST["notentablesWahl"] == "BG11") {
                            echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG11["6"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG11["5"])));
                        }
                        elseif($_POST["notentablesWahl"] == "BG12"){
                            echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["6"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["5"])));
                        }
                        ?>

                    </th>
                </tr>
                <tr>
                    <th> 4</th>
                    <th>
                        <?php
                        if ($_POST["notentablesWahl"] == "BG11") {
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG11[4]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG11[3]);
                        }
                        elseif($_POST["notentablesWahl"] == "BG12"){
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG12[5]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12[4]);
                        }
                        ?>
                    </th>
                    <th>
                        <?php
                        if ($_POST["notentablesWahl"] == "BG11") {
                            echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG11["5"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG11["4"])));
                        }
                        elseif($_POST["notentablesWahl"] == "BG12"){
                            echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["5"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["4"])));
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th> 3</th>
                    <th>
                        <?php
                        if ($_POST["notentablesWahl"] == "BG11") {
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG11[3]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG11[2]);
                        }
                        elseif($_POST["notentablesWahl"] == "BG12"){
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG12[4]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12[3]);
                        }
                        ?>
                    </th>
                    <th>
                        <?php
                        if ($_POST["notentablesWahl"] == "BG11") {
                            echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG11["4"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG11["3"])));
                        }
                        elseif($_POST["notentablesWahl"] == "BG12"){
                            echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["4"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["3"])));
                        }
                        ?>
                    </th>
                </tr>
                <tr>
                    <th> 2</th>
                    <th>
                        <?php
                        if ($_POST["notentablesWahl"] == "BG11") {
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG11[2]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG11[1]);
                        }
                        elseif($_POST["notentablesWahl"] == "BG12"){
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG12[3]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12[2]);
                        }
                        ?>
                    </th>
                    <?php
                    if ($_POST["notentablesWahl"] == "BG11") {
                        echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG11["3"]),$_POST["gesamtpunkte"]) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG11["2"]),$_POST["gesamtpunkte"]));
                    }
                    elseif($_POST["notentablesWahl"] == "BG12"){
                        echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["3"]),$_POST["gesamtpunkte"]) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["2"]),$_POST["gesamtpunkte"]));
                    }
                    ?>
                    <th>
                </tr>
                <tr>
                    <th> 1</th>
                    <th>

                        <?php
                        if ($_POST["notentablesWahl"] == "BG11") {
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG11[1]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG11[0]);
                        }
                        elseif($_POST["notentablesWahl"] == "BG12"){
                            echo calcPunkte($_POST["gesamtpunkte"], $tableBG12[2]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12[1]);
                        }
                        ?>
                    </th>
                    <th>
                        <?php
                        if ($_POST["notentablesWahl"] == "BG11") {
                            echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG11["2"]),$_POST["gesamtpunkte"]) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG11["1"]),$_POST["gesamtpunkte"]));
                        }
                        elseif($_POST["notentablesWahl"] == "BG12"){
                            echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["2"],$_POST["gesamtpunkte"]) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["1"]), $_POST["gesamtpunkte"])));
                        }
                        ?>
                    </th>
                </tr>

                <?php
                    if ($_POST["notentablesWahl"] == "BG12"){


                    ?>

                        <tr>
                            <th> 0</th>
                            <th>
                                <?php
                                    echo calcPunkte($_POST["gesamtpunkte"], $tableBG12[1]) . " – " . calcPunkte($_POST["gesamtpunkte"], $tableBG12[0]);
                                ?>
                            </th>
                            <th>
                                <?php
                                if ($_POST["notentablesWahl"] == "BG11") {
                                    echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG11["1"])) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG11["0"])));
                                }
                                elseif($_POST["notentablesWahl"] == "BG12"){
                                    echo(calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["1"]), $_POST["gesamtpunkte"]) . " - " . calcRProzent(calcPunkte($_POST["gesamtpunkte"], $tableBG12["0"]), $_POST["gesamtpunkte"]));
                                }
                                ?>
                            </th>
                        </tr>


                        <?php
                    }

                ?>
            </table>
        </div>

        </>


        <?php
    }
    ?>