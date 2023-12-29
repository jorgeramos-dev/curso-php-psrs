<?php

require_once '../vendor/autoload.php';

use App\Controller\HomeController as Home;

$home = new Home;
// echo $home->index();

$database = new \ETI\DB\Database;
var_dump($database);