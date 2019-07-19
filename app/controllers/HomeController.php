<?php

/**
* \HomeController
*/
class HomeController extends BaseController
{
  
  public function home()
  {
    $articles = Article::first();
    
    require dirname(__FILE__).'/../views/home.php';
  }
}