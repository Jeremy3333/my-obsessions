<!DOCTYPE html>
<html>
<head>
    <title>My Obsessions</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <img src="media/logo.png">
    </header>
    <div class="container">
        <nav>
            <?php
                $uri = explode("/", $_SERVER['REQUEST_URI']);
                echo $uri[0];
            ?>
        </nav>
        <main></main>
    </div>
</body>
</html>