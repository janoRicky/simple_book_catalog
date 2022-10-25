<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/simple_book_catalog/application/config/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/simple_book_catalog/application/models/Model_Books.php';

class Controller_Books extends config {
	function __construct() {
		$this->model = new Model_Books();
	}
	function get_books() {
		$result = $this->model->get_books();
		echo json_encode($result->fetch_all());
	}
	function get_book() {
		$result = $this->model->get_book($_GET['id']);
		echo json_encode($result->fetch_row());
	}
	function add_book() {
		$vars = [
			$_GET['title'],
			$_GET['isbn'],
			$_GET['author'],
			$_GET['publisher'],
			$_GET['year_published'],
			$_GET['category']
		];
		$result = $this->model->add_book($vars);
		if ($result) {
			echo 1;
		} else {
			echo 2;
		}
	}
	function update_book() {
		$vars = [
			$_GET['title'],
			$_GET['isbn'],
			$_GET['author'],
			$_GET['publisher'],
			$_GET['year_published'],
			$_GET['category'],
			$_GET['id']
		];
		// echo json_encode($vars);
		$result = $this->model->update_book($vars);
		if ($result) {
			echo 1;
		} else {
			echo 2;
		}
	}
	function delete_book() {
		$result = $this->model->delete_book($_GET['id']);
		if ($result) {
			echo 1;
		} else {
			echo 2;
		}
	}
}

?>