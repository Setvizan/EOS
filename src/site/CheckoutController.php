<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/src/utils/viewer.php";
    session_start();

    if(isset($_SESSION["userId"])){
        
    } else {
        $err["ERROR"] = "Please login to make purchases";
        viewPage("Account", $err);
    }

?>