<?php

/**
 *
 */
class Index extends Controller
{

  function __construct()
  {
    parent::__construct();
    //$view = new View();
    $this->view->render('index');
  }
}
