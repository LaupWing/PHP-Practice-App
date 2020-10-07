<?php



class Task
{
   public $description;

   protected $completed = false;

   public function __construct($description)
   {
      $this->description = $description;
   }

   public function isComplete()
   {
      return $this->completed;
   }
   public function complete()
   {
      $this->completed = true;
   }
}
try {
   new PDO('mysql:localhost=3306;dbname=php_practice', 'root', 'password123');
} catch (PDOException $e) {
   die('Could not connect');
}
require 'index.view.php';
