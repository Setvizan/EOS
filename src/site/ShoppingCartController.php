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
        $toCartData = $_SESSION["cart"];
        $toCartData[] = $_GET["toCart"];
        $_SESSION["cart"] = array_unique($toCartData);
    }

    if(isset($_GET["removeCart"])){
        $removeCartData = $_SESSION["cart"];
        $index = array_search($_GET["removeCart"], $removeCartData);
        unset($removeCartData[$index]);
        $_SESSION["cart"] = array_values($removeCartData);
    }
    
    $data = [];
    for($i = 0; $i < count($_SESSION["cart"]); $i++){
        $data[] = $prep->find($_SESSION["cart"][$i])[0];
    }
    viewPage("ShoppingCart", $data);
?>