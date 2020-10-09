<?php

class PagesController
{
   public function home()
   {
      $users = App::get('database')->selectAll('users');

      require view('index', compact('users'));
   }
   public function about()
   {
      die(var_dump(view('about')));
      require view('about');
   }
   public function contact()
   {
      require view('contact');
   }
}
