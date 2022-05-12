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

        public function getProduct($id) : array {
            return $this->productRepository->find($id);
        }

        public function loadProductPage() : void {
            viewPage("ProductPage", $this->getProducts());
        }

        public function loadProductDetail($id) : void {
            viewPage("ProductPage", $this->getProduct($id));
        }
    }

    $rep = new ProductController();
    
    if(isset($_GET["pid"])){
        $rep->loadProductDetail($_GET["pid"]);
    } else {
        $rep->loadProductPage();
    }
?>