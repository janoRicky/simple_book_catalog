<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/simple_book_catalog/application/config/config.php';

class Controller_Main extends config {

	function __construct() {
		// $this->
	}

	function main() {

		require $this->get('base_url') . 'application/views/main.php';
	}
}

?>