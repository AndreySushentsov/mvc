<?php
/**
 *
 */
use Twig_Environment;
use Twig_Loader_Array;


class View
{
  protected $loader;
  protected $twig;

  public function __construct($data=[])
  {
    $this->loader = new Twig_Loader_Filesystem('views');
    $this->twig = new Twig_Environment($this->loader);
  }
  public function render($file_name)
  {
    echo $this->twig->render($file_name . '/index.php');
    //require_once __DIR__ . '/../views/' . $file_name . '/index.php';
  }
}
