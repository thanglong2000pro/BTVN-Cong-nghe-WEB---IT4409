<?php
define('PROJECT_ROOT_PATH', __DIR__.'/');
include_once(PROJECT_ROOT_PATH."controller/Controller.php");
// echo __DIR__;
// echo __FILE__;
$controller = new Controller();
$controller->invoke();