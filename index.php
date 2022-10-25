<?php

// header("Location: ./application/views/main.php");

require_once $_SERVER['DOCUMENT_ROOT'] . '/simple_book_catalog/application/controllers/Controller_Main.php';
// print_r('expression');
$controller_main = new Controller_Main();

$controller_main->main();

// $controller_main;


?>