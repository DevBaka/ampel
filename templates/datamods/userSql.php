<?php
class UDB{
   /* private static $_db_username = "devside";
    private static $_db_password = "BaKaxY?3347";
    private static $_db_host = "192.168.2.105";
    private static $_db_port = "3306";
    private static $_db_name = "Devside";
    private static $_db;
    
    function __construct() {
         
        try{
            self::$_db = new PDO("mysql:host=" . self::$_db_host . ";dbname=" . self::$_db_name, self::$_db_username, self::$_db_password);
            //self::$_db = new PDO("mysql:host=" . self::$_db_host . ";mysql:port=" . self::$_db_port . ";mysql:dbname=" . self::$_db_name . ";mysql:username=" .self::$_db_username . ";mysql:passwd=" . self::$_db_password . ";");
            //self::$_db = new PDO("mysql:host=devbaka.ddns.net;dbname=Ampel", "devbaka", "Hapsoxy33");
            /*$db = new SQLite3('ampel.db');
            $result = $db->query("SHOW DATABASES;");
            $answer = $result->fetchArray();*/
            //echo("lol: " + $answer);
            
       /*     
            
        } catch (PDOException $e) {
          echo "Datenbankverbindung gescheitert!: " .$e->getMessage();
          die();
        }
    }
    
         */
    
    
             /*
    
	public function emailInDatabase($email){ 
       $statement = $pdo->prepare("SELECT * FROM users WHERE user_email = :email");
       $result = $statement->execute(array('email' => $email));
       $user = $statement->fetch();
       
       if($user !== false) {
          return 'Diese E-Mail-Adresse ist bereits vergeben<br>';
       } 
       
       else{
          return 'Diese E-Mail ist noch verfügbar. <br>';
       }
  }
	
  public function UserAdd($email, $passwd){
    $stmt = self::$_db->prepare("INSERT INTO users (user_email, user_passwort) VALUES (:email, :passwort)");
    $result = $stmt->execute(array('email' => $email, 'passwort' => $passwd));
    return $result;
  }   
  
            */
            
  }

?>


