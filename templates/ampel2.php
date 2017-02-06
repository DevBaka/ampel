<?php
   require_once 'phpampel.php';
   $ampel = new Ampel();
   $zustand = $ampel->dbzustand2();
   //echo($zustand);

?>

<h1> MySQL_Ampel</h1>
<article>
    <?php
        //echo "<h2>" . $zustand . "</h2>";
        if($zustand == 0){ 
		header("refresh:3;url=index.php?section=Ampel2");
            echo ''
            . '<style>
                    #red1{background-color: red; }
                    #yellow1{background-color: black; }
                    #green1{background-color: black; }
					#red2{background-color: red; }
                    #yellow2{background-color: black; }
                    #green2{background-color: black; }
                </style>
                    .';
        }
        
        elseif($zustand == 1){ 
		header("refresh:1.5;url=index.php?section=Ampel2");
            echo ''
            . '<style>
                    #red1{background-color: red; }
                    #yellow1{background-color: yellow; }
                    #green1{background-color: black; }
					#red2{background-color: red; }
                    #yellow2{background-color: black; }
                    #green2{background-color: black; }
                </style>
                    .';
        }
        
        elseif($zustand == 2){ 
		header("refresh:15;url=index.php?section=Ampel2");
            echo ''
            . '<style>
                    #red1{background-color: black; }
                    #yellow1{background-color: black; }
                    #green1{background-color: green; }
					#red2{background-color: red; }
                    #yellow2{background-color: black; }
                    #green2{background-color: black; }
                </style>
                    .';
        }
        elseif($zustand == 3){ 
		header("refresh:3;url=index.php?section=Ampel2");
            echo ''
            . '<style>
                    #red1{background-color: black; }
                    #yellow1{background-color: yellow; }
                    #green1{background-color: black; }
					#red2{background-color: red; }
                    #yellow2{background-color: black; }
                    #green2{background-color: black; }
                </style>
                    .';
        }
		if($zustand == 4){ 
		header("refresh:3;url=index.php?section=Ampel2");
            echo ''
            . '<style>
                    #red1{background-color: red; }
                    #yellow1{background-color: black; }
                    #green1{background-color: black; }
					#red2{background-color: red; }
                    #yellow2{background-color: black; }
                    #green2{background-color: black; }
                </style>
                    .';
        }
        elseif($zustand == 5){ 
		header("refresh:1.5;url=index.php?section=Ampel2");
            echo ''
            . '<style>
                    #red1{background-color: red; }
                    #yellow1{background-color: black; }
                    #green1{background-color: black; }
					#red2{background-color: red; }
                    #yellow2{background-color: yellow; }
                    #green2{background-color: black; }
                </style>
                    .';
        }
        
        elseif($zustand == 6){ 
		header("refresh:15;url=index.php?section=Ampel2");
            echo ''
            . '<style>
                    #red1{background-color: red; }
                    #yellow1{background-color: black; }
                    #green1{background-color: black; }
					#red2{background-color: black; }
                    #yellow2{background-color: black; }
                    #green2{background-color: green; }
                </style>
                    .';
        }
        elseif($zustand == 7){ 
		header("refresh:3;url=index.php?section=Ampel2");
            echo ''
            . '<style>
                    #red1{background-color: red; }
                    #yellow1{background-color: black; }
                    #green1{background-color: black; }
					#red2{background-color: black; }
                    #yellow2{background-color: yellow; }
                    #green2{background-color: black; }
                </style>
                    .';
        }
        
    ?>
    
    
	<div id="ampel1" class="Ampel">
		<div id="red1" >
		</div>
		<div id="yellow1" >
		</div>
		<div id="green1" >
		</div>
	</div>
	
	<div id="ampel2" class="Ampel">
		<div id="red2" >
		</div>
		<div id="yellow2" >
		</div>
		<div id="green2" >
		</div>
	</div>
	
</article>
