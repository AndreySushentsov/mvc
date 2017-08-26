<?php
/**
 *
 */
class Registration extends Controller
{

  function __construct()
  {
    parent::__construct();
    $this->view->render('registration');
  }

  public function test(){
    echo "test method";
  }
}
