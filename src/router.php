<?php
function handleRequest(string $uri): array {
    $uri = explode("/", $uri);
    foreach ($uri as $i => $word) {
        if ($word === "")
            unset($uri[$i]);
    }
    if (empty($uri)) {
        return [
            'code' => 200,
            'file' => 'src/home.php'
        ];
    } else {
        return [
            'code' => 404,
            'file' => null // ou un fichier 404 personnalisé
        ];
    }
}
?>