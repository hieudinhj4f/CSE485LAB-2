<?php
require_once('config/config.php');
require_once APP_ROOT.'/tlunews/controllers/HomeController.php';

$homecontroller = new HomeController();
$homecontroller->index();


?>

