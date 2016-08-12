<?php
   class DB extends SQLite3{

      public function baka(){
         return "fggt bka";
      }

      public function red1(){
         $db = new SQLite3("ampel.db");
         $selected = $db->query("SELECT * FROM Ampel");
         return $selected;
      }
   }

   

   /*
   class MyDB extends SQLite3
   {
      public function __construct()
      {
         $this->open('ampel.db');
      }

      public function baka(){
         return "baka";
      }
   }
   */

?>
