<?php
    class Database {
        private $hostname = "ID355318_sortinghat.db.webhosting.be";
        private $username = "ID355318_sortinghat";
        private $password = "SortingHat2021";
        private $dbName = "ID355318_sortinghat";
        public $conn;

        function __construct() {
            $this->conn = $this->createConnection();
        }

        function createConnection() {
            $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbName);

            if ($conn == false) {
                echo "Connection failed";
                die();
            }

            return $conn;
        }

        function getQueryFetchAll($query) {
            return mysqli_query($this->conn, $query)->fetch_all(MYSQLI_ASSOC);
        }

        function getQuery($query) {
            return mysqli_query($this->conn, $query);
        }
    
        function insertQuery($query) {
            return mysqli_query($this->conn,$query);
        }

        function updateQuery($query) {
            return mysqli_query($this->conn,$query);
        }  

        function rows($result) {
            return mysqli_num_rows($result);
        }

        function fetchArray($result) {
            return mysqli_fetch_array($result);
        }

        public function __destruct() {
            mysqli_close($this->conn);
        }
    }