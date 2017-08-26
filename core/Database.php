<?php
/**
 *
 */
class Database
{

  function __construct()
  {
    $this->connect = new mysqli('localhost','root','111111','homework_4');
  }
}
