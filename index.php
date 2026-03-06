<?php

if (php_sapi_name() === 'cli-server') {
    $file = __DIR__ . $_SERVER['REQUEST_URI'];
    if (is_file($file) && pathinfo($file, PATHINFO_EXTENSION) !== 'php') {
        return false;
    }
}

require 'src/router.php';

$result = handleRequest($_SERVER['REQUEST_URI']);

http_response_code($result['code']);
if ($result['file']) {
    include $result['file'];
}
?>