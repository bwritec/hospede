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
    <link rel="stylesheet" type="text/css" href="/dist/framework/reset.css">
    <link rel="stylesheet" type="text/css" href="/dist/framework/grid.css">

    <!--
      - Icons.
     -->
    <link rel="stylesheet" type="text/css" href="/dist/icons/all.css">

    <!--
      - Estilos.
     -->
    <link rel="stylesheet" type="text/css" href="/dist/css/style.css">

    <!--
      - jQuery.
     -->
    <script type="text/javascript" src="/dist/jquery/jquery.js"></script>

    <!--
      - Scripts.
     -->
    <script type="text/javascript" src="/dist/libs/jquery-ui/dist/jquery-ui.js"></script>

</head>
<body>

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <?= env("name"); ?>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

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