<?php
require_once 'core/views.php';
require_once 'vendor/autoload.php';

// задаем переменные
$url = explode('/', $_GET['url']);
$file_name = './controllers/' . strtolower($url[0]) . '.php';
$controller ;
$method ;


// выводим индексную страницу при пустом url
if(empty($url[0])){
  require './controllers/index.php';
  $controller = new Index();
  return false;
}

// задаем имя контроллеру
if(!empty($url[0])){
  $controller = $url[0];
//  echo $controller;
}

// залаем имя методу контроллера
if(!empty($url[1])){
  $method = $url[1];
}


// проверяем существование файла, класса, методов
try {

  $class_name = ucfirst($controller); // Первый символ заглавная буква

  if(file_exists($file_name)){
    require_once $file_name;
  } else {
    throw new Exception('Файл не найден.');
  }

  if(class_exists($class_name)){
    $ctrl = new $class_name();
  }else {
    throw new Exception('Class not found');
  }

  if(method_exists($ctrl,$method)){
    $ctrl->$method();
  }

} catch (Exception $e) {
  require 'errors/404.php';
}
