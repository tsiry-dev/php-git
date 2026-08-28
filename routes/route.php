<?php

require_once PATH . "/app/controllers/homeController.php";

if (isset($_GET['page'])) {
  $page = $_GET['page'];

  require_once PATH . '/routes/category.route.php';
  require_once PATH . '/routes/contact.route.php';
  

}else {
   homeController();
}




