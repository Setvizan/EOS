<?php
    require_once 'Database.php';

    class ProductRepository {
        private $db;

        function __construct() {
            $this->db = new Database();
        }

        function findAll() : array {
            $this->db->query("SELECT * FROM `PRODUCT`");
            return $this->db->resultSet();
        }

        function find($id) : array {
            $this->db->query("SELECT * FROM `PRODUCT` WHERE ID = :id");
            $this->db->bind(':id', $id);
            return $this->db->resultSet();
        }
    }
?>