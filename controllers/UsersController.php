<?php

class UsersController
{
   public function index()
   {
      $users = App::get('database')->selectAll('users');

      require view('users', compact($users));
   }
   public function store()
   {
      App::get('database')->insert('users', [
         'name' => $_POST['name']
      ]);

      header('Location: /');
   }
}
