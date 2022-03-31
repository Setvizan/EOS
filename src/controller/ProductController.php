<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/src/repository/ProductRepository.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."/src/utils/viewer.php";

    class ProductController {
        function __construct() {
            $this->productRepository = new ProductRepository();
        }

        public function products() {
            $data = $this->getProducts();

            view("ProductList", $data);
        }

        private function getProducts() : array {
            return $this->productRepository->findAll();
        }
    }











?>