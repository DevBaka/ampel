
<?php
class Ampel{
    public static $_status = 0;
	public static $_status2 = 0;
    
    private static $_db_username = "root";
    private static $_db_password = "HapsoxY?3347";
    private static $_db_host = "127.0.0.1";
    private static $_db_port = "3306";
    private static $_db_name = "Ampel";
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
            
        } catch (PDOException $e) {
          echo "Datenbankverbindung gescheitert!: " .$e->getMessage();
          die();
        }
        //echo "hello world";
    }
    
    public function zustand2(){
        /*$GLOBALS['status'] = $GLOBALS['status'] + 1;
        if($GLOBALS['status'] == 4){
            $GLOBALS['status'] = 0;
        }*/
        self::$_status2 = self::$_status + 1;
        if(self::$_status2 == 8){
            self::$_status2 = 0;
        }
        return self::$_status;
    }
	
	function dbupdate2($zustand){
        $stmt = self::$_db->prepare("Update Zustand SET Status=:newzustand WHERE Ampel=2");
        $stmt->bindParam(":newzustand", $zustand);
        $stmt->execute();
    }
	
	public function dbzustand2(){
        $stmt = self::$_db->prepare("SELECT Status FROM Zustand WHERE Ampel=2");
        $stmt->execute();
        $status = $stmt->fetch(PDO::FETCH_OBJ);
        //$result = explode($status["Status"]);
        //return $status->Status;
        
        $newstatus = $status->Status + 1;
        if($newstatus == 8){
            $newstatus = 0;
        }
        
        
        self::dbupdate2($newstatus);
        return $status->Status;
        //return $newstatus;
       
        
    }
	
    public function zustand(){
        /*$GLOBALS['status'] = $GLOBALS['status'] + 1;
        if($GLOBALS['status'] == 4){
            $GLOBALS['status'] = 0;
        }*/
        self::$_status = self::$_status + 1;
        if(self::$_status == 4){
            self::$_status = 0;
        }
        return self::$_status;
    }
    
    function dbupdate($zustand){
        $stmt = self::$_db->prepare("Update Zustand SET Status=:newzustand WHERE Ampel=1");
        $stmt->bindParam(":newzustand", $zustand);
        $stmt->execute();
    }
    
    public function dbzustand(){
        $stmt = self::$_db->prepare("SELECT Status FROM Zustand WHERE Ampel=1");
        $stmt->execute();
        $status = $stmt->fetch(PDO::FETCH_OBJ);
        //$result = explode($status["Status"]);
        //return $status->Status;
        
        $newstatus = $status->Status + 1;
        if($newstatus == 4){
            $newstatus = 0;
        }
        
        
        self::dbupdate($newstatus);
        return $status->Status;
        //return $newstatus;
        
        
    }
}

?>
