<?php

  class N{

    public static $e;
    public static $database;
    public static $DIR = "/insta_clone";
    public static $GMAIL = "yeseanthyerraguntla464@gmail.com";
    public static $GMAIL_PASSWORD = "Reddy@464";

    public static function _DB(){
      try {
        self::$database = new PDO('mysql:host=127.0.0.1;dbname=instagram;charset=utf8mb4', 'root', '');
        self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $e = self::$e;
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
      return self::$database;
    }

  }

?>
