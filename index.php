<?php

    include __DIR__ . "/loader.php";

?>
<!DOCTYPE html>
<html>
<head>

    <!--
      - Charset.
     -->
    <meta charset="utf-8">

    <!--
      - Viewport.
     -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--
      - Título.
     -->
    <title><?= env("name") ?> - Página inicial</title>

    <!--
      - Framework.
     -->
    <link rel="stylesheet" type="text/css" href="<?= env('url'); ?>/dist/framework/reset.css">
    <link rel="stylesheet" type="text/css" href="<?= env('url'); ?>/dist/framework/grid.css">
    <link rel="stylesheet" type="text/css" href="<?= env('url'); ?>/dist/framework/panel.css">

    <!--
      - Icons.
     -->
    <link rel="stylesheet" type="text/css" href="<?= env('url'); ?>/dist/icons/css/all.css">

    <!--
      - Fonts.
     -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap">

    <!--
      - jQuery.
     -->
    <script type="text/javascript" src="<?= env('url'); ?>/dist/jquery/jquery.js"></script>

    <!--
      - Estilos.
     -->
    <link rel="stylesheet" type="text/css" href="<?= env('url'); ?>/dist/css/style.css">

</head>
<body>

    <div class="panel panel-light">
        <div class="container">
            <div class="row">
                <div class="col panel-brand">
                    <a href="<?= env('url'); ?>/index.php">
                        <?= env("name"); ?>
                    </a>
                </div>

                <div class="col panel-menu">
                    
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= env('url'); ?>/index.php">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= env('url'); ?>/docs/index.php">
                            Docs
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-2">
        <div class="row">
            <div class="col col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            Home
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


</body>
</html>