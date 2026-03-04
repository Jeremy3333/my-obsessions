<?php
    $uri = explode("/", $_SERVER['REQUEST_URI']);
    foreach ($uri as $i => $word) {
        if ($word === "")
            unset($uri[$i]);
    }
    if (sizeof($uri) == 0) {
        include "src/home.php";
        http_response_code(200);
    } else {
        http_response_code(404);
    }
?>