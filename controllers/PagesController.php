<?php

class PagesController
{
   public function home()
   {
      require view('index');
   }
   public function about()
   {
      require view('about');
   }
   public function contact()
   {
      require view('contact');
   }
}
