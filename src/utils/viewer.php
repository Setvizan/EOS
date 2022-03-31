<?php

    function view(string $view, array $data = []) : void {   
        $file = $_SERVER["DOCUMENT_ROOT"].'/src/components/'.$view.'.php';
        // Check for view file
        if (is_readable($file)) {
            require_once $file;
        } else {
        // View does not exist
            die('<h1> 404 Page not found </h1>');
        }
    }

?>