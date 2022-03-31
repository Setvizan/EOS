<?php
    class Product {
        public $id;
        public $name;
        public $cost;
        public $imagePath;
        public $description;

        function __construct($id, $name, $cost, $imagePath, $description){
            $this->id = $id;
            $this->name = $name;
            $this->cost = $cost;
            $this->imagePath = $imagePath;
            $this->description = $description;
        }
    }
?>