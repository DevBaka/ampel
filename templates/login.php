<?php

    require_once 'user.php';
    $udb = new UDB();
    if(isset($_SESSION['user'])){
        echo "Sie sind bereits mit der E-Mail: '" . $_SESSION['user'] . "'' eingeloggt.";
        echo('<p>Du bist bereits eingeloggt. <a href="index.php?section=logout">log out</a>.</p>');
    }
    else{
?>

        <form action="" method="post" name="login_form">
            Email: <input type="text" name="email" />
            Password: <input type="password" 
                             name="password" 
                             id="password"/>
            <input type="submit" 
                   value="Login" 
                   name="login" /> 
        </form>


        <p>Noch nicht Angemeldet? Dann können Sie sich <a href="index.php?section=register">hier</a> registrieren.</p>
<?php
          if($_POST['login'])
          {
              $usermail = $_POST["email"];
              $userpass = $_POST["password"];
              $test = $udb->login($usermail, $userpass);
              if($test == "True"){
                  echo("Login Erfolgreich.");
              }
              else{
                  echo("Login Fehlgeschlagen.");
              }

          }

      }
?>