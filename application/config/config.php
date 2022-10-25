<?php

class config {

    function __construct() {
        $this->base_url = 'http://localhost/simple_book_catalog/';

        $this->DB_SERVER = 'localhost';
        $this->DB_USERNAME = 'root';
        $this->DB_PASSWORD = '';
        $this->DB_NAME = 'book_catalog_db';
    }

    public function get($var) {
        return $this->$var;
    }
}
