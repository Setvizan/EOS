<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/src/repository/ProductRepository.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."/src/utils/viewer.php";

    class ProductController {
        function __construct() {
            $this->productRepository = new ProductRepository();
        }

        public function getProducts() : array {
            return $this->productRepository->findAll();
        }

        public function loadProductPage() : void {
            viewPage("ProductPage", $this->getProducts());
        }
    }

    $rep = new ProductController();
    $rep->loadProductPage()
?>