<ul>
	<li><a href="index.php?section=Start">Home</a></li>
    <?php
        if(isset($_SESSION['user'])){
            echo("<li><a href='index.php?section=logout'>Logout</a></li>");
        }
        else{
            echo("<li><a href='index.php?section=login'>Login</a></li>");
        }

    ?>
</ul>
