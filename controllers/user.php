<?php
/**
 *
 */
class User extends Controller
{

  function __construct()
  {
    parent::__construct();
    echo "User controller";
  }

  public function test(){
    echo "test method";
  }
}
