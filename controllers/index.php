<?php

/**
 *
 */
class Index
{

  function __construct()
  {
    $view = new View();
    $view->render('index');
  }
}
