<?php
  require_once 'userRoutes.php';

  if (isset($_REQUEST['url'])) {
    $url = $_REQUEST['url'];
    if (in_array($url,$userDefinedRoute)) {
      $full_path = "controllers/".$url."Controller.php";
      if (file_exists($full_path)) {
        require_once 'middleware/middleware.php';
        require_once $full_path;
      }else {
        require 'controllers/errorController.php';
      }
    }else {
      require 'controllers/errorController.php';
    }
  }else {
    require 'controllers/homeController.php';
  }
 ?>
