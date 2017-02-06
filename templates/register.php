<?php
header("<title>Secure Login: Registration Form</title>");
  try{
    require_once('user.php');
    $udb = new UDB();
  if (!file_exists('user.php' ))
    throw new Exception ('userSql.php does not exist');
  else
    require_once('user.php' ); 
  }
  catch(Exception $e) {    
    echo "Message : " . $e->getMessage();
    echo "Code : " . $e->getCode();
  }

      $showFormular = true; 

?>
       
        
 <form action="?section=register" method="_POST">
    Vorname: <br>
    <input type="hidden" name="section" value="register">
	E-Mail: <br>
    <input type="email" size="40" maxlength="250" name="email"><br><br>
     
    Dein Passwort:<br>
    <input type="password" size="40"  maxlength="250" name="passwort"><br>
     
    Passwort wiederholen:<br>
    <input type="password" size="40" maxlength="250" name="passwort2"><br><br>
     
    <input type="submit" value="Abschicken">
  </form>

  <?php 
  
      if(isset($_POST)) {
         $error = false;
         $email = $_GET['email'];
         $passwort = $_GET['passwort'];
         $passwort2 = $_GET['passwort2'];


          
         if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
         $error = true;
         } 
         if(strlen($passwort) == 0) {
         echo 'Bitte ein Passwort angeben<br>';
         $error = true;
         }
         if($passwort != $passwort2) {
         echo 'Die Passwörter müssen übereinstimmen<br>';
         $error = true;
         }
		else{
			$udb->UserAdd($email, $passwort, $vorname, $nachname);
		}
         
}
  
  ?>
