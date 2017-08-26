<?php
/**
 *
 */
class Database
{

  function __construct()
  {
    $this->connect = new mysqli('localhost','root','6505599930','homework_4');
  }
}
