<?php

require_once PATH . "/app/controllers/homeController.php";

if (isset($_GET['page'])) {
  $page = $_GET['page'];

  require_once PATH . '/routes/category.route.php';
<<<<<<< HEAD
  require_once PATH . '/routes/produit.route.php';
=======
  require_once PATH . '/routes/about.route.php';
  require_once PATH . '/routes/service.route.php';
} else {
  homeController();
}
>>>>>>> 239c5bceeec4fbefb2140056992ec41011906e5a

