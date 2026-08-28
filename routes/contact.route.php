<?php

require_once PATH . '/app/controllers/categoryController.php';
require_once PATH . '/app/controllers/contact.controller.php';


/**
* @var string $page;
 */
if($page === "contact") {
    contactController ();
}