<?php
require 'src/router.php';

$result = handleRequest($_SERVER['REQUEST_URI']);

http_response_code($result['code']);
if ($result['file']) {
    include $result['file'];
}
?>