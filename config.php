<?php


return [
   'database' => [
      'name' => 'php_practice',
      'username' => 'root',
      'password' => 'password123',
      'connection' => 'mysql:localhost=3306',
      'options' => [
         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ]
   ]
];
