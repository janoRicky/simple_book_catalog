<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once $_SERVER['DOCUMENT_ROOT'] . '/simple_book_catalog/application/models/Model_Main.php';

class Model_Books extends Model_Main {
    function get_book($id) {
        $sql = 'SELECT * FROM books WHERE id = ?';
        return $this->run_query($sql,'select','i',[$id]);
    }
    function get_books() {
        $sql = 'SELECT * FROM books ORDER BY id DESC';
        return $this->run_query($sql,'select');
    }
    function add_book($vars) {
        $sql = 
            'INSERT INTO books (title, isbn, author, publisher, year_published, category)
            VALUES (?,?,?,?,?,?);';
        return $this->run_query($sql,'insert','ssssds',$vars);
    }
    function update_book($vars) {
        $sql = 
            'UPDATE books 
            SET title = ?, isbn = ?, author = ?, publisher = ?, year_published = ?, category = ?
            WHERE id = ?;';
        return $this->run_query($sql,'edit','ssssdsi',$vars);
    }
    function delete_book($id) {
        $sql = 'DELETE FROM books WHERE id = ?';
        return $this->run_query($sql,'delete','i',[$id]);
    }
}
?>