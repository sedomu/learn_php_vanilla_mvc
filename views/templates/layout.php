<?php
/** @var string $content */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Learn PHP vanilla</title>
        <link rel="stylesheet" href="/styles/bulma.min.css">
        <link rel="icon" type="image/png" href="/assets/favicon.png">
    </head>
    
    <body>

        <?php require_once "navbar.php"; ?>
            
        <?= $content  ?>
        
        <?php require_once "footer.php"; ?>
    
    </body>
</html>