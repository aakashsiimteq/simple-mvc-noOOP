<?php
  if (isset($_REQUEST['type']) && $_REQUEST['type'] != '') {
    if ($_REQUEST['type'] == 'test') {
      require 'controllers/errorControllerMiddleware.php';
    }
  }
 ?>
