<?php
    require_once "../config/boostrap.php";
    
?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="/projet/public/css/styles.css" />
    <link rel="stylesheet" href="/projet/public/css/<?=$page_styles?>.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <script src="https://kit.fontawesome.com/f454128a6e.js" crossorigin="anonymous"></script>

    <title></title>
</head>

<body>
    <div class="container">
        <?php 
            require_once "../router/router.php";
        ?>
    </div>

</body>

</html>