<?php

class Connection
{
   public static function make()
   {
      try {
         return new PDO('mysql:localhost=3306;dbname=php_practice', 'root', 'password123');
      } catch (PDOException $e) {
         die('Could not connect ' . $e->getMessage());
      }
   }
}
