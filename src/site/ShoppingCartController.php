<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/src/utils/viewer.php";
    require_once $_SERVER["DOCUMENT_ROOT"]."/src/repository/ProductRepository.php";

    // This is the mega aids class
    $prep = new ProductRepository();

    session_start();

    if(!isset($_SESSION["cart"])){
        $_SESSION["cart"] = [];
    }
    if(isset($_GET["toCart"])){
        $_SESSION["cart"][] = $_GET["toCart"];
    }

    if(isset($_GET["removeCart"])){
        $index = array_search($_GET["removeCart"], $_SESSION["cart"]);
        unset($_SESSION["cart"][$index]);
    }
    $data = [];
    for($i = 0; $i < count($_SESSION["cart"]); $i++){
        $data[] = $prep->find($_SESSION["cart"][$i])[0];
    }
    viewPage("ShoppingCart", $data);
?>