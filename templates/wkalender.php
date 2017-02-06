<?php
/**
 * Created by PhpStorm.
 * User: tesio
 * Date: 19.12.16
 * Time: 12:22
 */
    //echo("hello \n <br>");
    $timestamp = time();
    $y = date(Y, $timestamp);
    $m = date(m, $timestamp);
    $d = date(d, $timestamp);



    //echo($timestamp . "<br>");


    echo("Aktuelles Datum: " . $d .".". $m . ".". $y . "<br>");

    function genGeschenk($d){
        switch($d){
            case 1:
                return("Weihnachtsbaum");
                break;

            case 2:
                return("Schokohase");
                break;

            case 3:
                return("Frohe Weihnachten");
                break;

            case 4:
                return("Plastik Weihnachtsbaum mit DVB-T Antenne");
                break;

            case 5:
                return("LoL");
                break;

            case 6:
                return("WoW Gold");
                break;

            case 7:
                return("cocain");
                break;

            case 8:
                return("troller");
                break;

            case 9:
                return(" a gitarre");
                break;

            case 10:
                return("stück handy");
                break;

            case 11:
                return("Rasenmäher");
                break;

            case 12:
                return("Wasserfilter");
                break;

            case 13:
                return("Durchlauferhitzer");
                break;

            case 14:
                return("Weihnachtskekse");
                break;

            case 15:
                return("Weihnachtszimt");
                break;

            case 16:
                return("Weihnachtstee");
                break;

            case 17:
                return("Weihnlei");
                break;

            case 18:
                return("lol blizzard");
                break;

            case 19:
                return("overwatch");
                break;
            case 20:
                return("Autobahn DE-43DS");
                break;
            case 21:
                return("lol = lol of lols");
                break;
            case 22:
                return("Ein größeres Schokoladen stück");
                break;
            case 23:
                return("lol morgen ist Blizzard am Weihnachten");
                break;

            case 24:
                return("Weihnachtsmann");
                break;

        }
    }

    if($m == 12 and $d <= 24){
        for($i = 0; $i < 24; $i = $i +1){
            if($i == $d){
                echo("<br> Heute ist der " . $d . " und du bekommst einen " . genGeschenk($d) ."<br>");
            }

        }
    }

    if($m == 12 and $d <= 24){
        echo("Der Weihnachtskalender ist aktiv.");
        switch(date(d, $timestamp)) {

        }
    }

    elseif($m == 1 ){
        echo("Leider haben Sie Weihnachten entweder verharzt oder haben einen anderen Grund gehabt diese Seite zu besuchen,");
    }

    elseif($m >= 2 and $m < 12){
        echo("Es ist kein Weihnachten. Bitte Kommen Sie Zu Weihnachten nochmal wieder.");
    }
?>