<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/simple_book_catalog/application/controllers/Controller_Books.php';

$controller_books = new Controller_Books();


$action = $_GET['a'];

switch ($action) {
	case 'add_book':
		$controller_books->add_book();
		break;
	case 'update_book':
		$controller_books->update_book();
		break;
	case 'get_books':
		$controller_books->get_books();
		break;
	case 'get_book':
		$controller_books->get_book();
		break;
	case 'delete_book':
		$controller_books->delete_book();
		break;
	
	default:
		// code...
		break;
}



?>