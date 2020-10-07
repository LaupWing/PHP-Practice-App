<?php

function connectToDb()
{
   try {
      return new PDO('mysql:localhost=3306;dbname=php_practice', 'root', 'password123');
   } catch (PDOException $e) {
      die('Could not connect ' . $e->getMessage());
   }
}

function fetchAllTasks($pdo)
{
   $statement = $pdo->prepare('select * from tasks');
   $statement->execute();
   return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
