<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/simple_book_catalog/application/config/config.php';

class Model_Main extends config {
    function connect() {
        $conn_creds = array(
            $this->get('DB_SERVER'),
            $this->get('DB_USERNAME'),
            $this->get('DB_PASSWORD'),
            $this->get('DB_NAME'),
        );
        $conn = new mysqli(...$conn_creds);
        if ($conn->connect_error) {
            return false;
        } else {
            return $conn;
        }
    }

    function run_query($sql,$q_type,$types='',$vars=[]) {
        $conn = $this->connect();
        if ($conn) {
            $stmt = $conn->prepare($sql);
            
            if ($types != '') {
                $stmt->bind_param($types, ...$vars);
            }

            $result = $stmt->execute();
            if ($result && $q_type == 'select') {
                $result = $stmt->get_result();
            }

            $stmt->close();
            $conn->close();

            return $result;
        } else {
            return $conn->error;
        }
    }
}
// $test = new Model_Main();
// print_r($test->run_query('SELECT * FROM books'));

?>