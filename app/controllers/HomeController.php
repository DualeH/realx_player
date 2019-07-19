<?php

/**
* \HomeController
*/
class HomeController extends BaseController
{
  
  public function home()
  {
    Article::first();
  }
}