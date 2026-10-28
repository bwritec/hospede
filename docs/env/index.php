<?php

    include __DIR__ . "/../../loader.php";

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
    <title><?= env("name") ?> - O método env</title>

    <!--
      - Estilos.
     -->
    <link rel="stylesheet" type="text/css" href="/dist/libs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/dist/libs/fontawesome-free/css/all.css">
    <link rel="stylesheet" type="text/css" href="/dist/css/style.css">

    <!--
      - Scripts.
     -->
    <script type="text/javascript" src="/dist/libs/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="/dist/libs/fontawesome-free/js/all.js"></script>
    <script type="text/javascript" src="/dist/libs/jquery/dist/jquery.js"></script>
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
                        <li class="breadcrumb-item">
                            <a href="<?= env('url'); ?>/index.php">
                                Home
                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            <a href="<?= env('url'); ?>/docs/index.php">
                                Docs
                            </a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            Env
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col col-12">
                <h5>
                    <span class="badge text-bg-secondary">
                        env();
                    </span>
                </h5>

                <p>
                    Essa função busca e devolve uma variavel de
                    ambiente de forma global.
                </p>

                <code class="language-php">env($attribute);</code>

                <p>
                    Para obter um valor você deve informar uma string
                    com valor de atributo no parametro <code class="language-php">$attribute</code>.
                    abaixo tem a lista de atributos disponível.
                </p>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Atributo</th>
                            <th>Constante</th>
                            <th>Descrição</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                name
                            </td>

                            <td>
                                PROVIDER_NAME
                            </td>

                            <td>
                                O nome do provedor de hospedagem. Caso você
                                tenha seu proprio provedor de hospedagem,
                                você pode obter o nome dele com esse
                                parametro.
                            </td>
                        </tr>

                        <tr>
                            <td>
                                url
                            </td>

                            <td>
                                PROVIDER_URL
                            </td>

                            <td>
                                O URL do provedor de hospedagem. Para caso
                                você tenha seu proprio provedor de hospedagem,
                                você pode obter a url dele com esse parametro.
                            </td>
                        </tr>

                        <tr>
                            <td>
                                lang
                            </td>

                            <td>
                                PROVIDER_LANGUAGE
                            </td>

                            <td>
                                O idioma do site, esse valor é global. Más
                                você deve saber sé o software tem suporte para
                                o idioma que você escolheu. Caso contrario, só
                                vai afetar a saída HTML.
                            </td>
                        </tr>
                    </tbody>
                </table>

                <h3>
                    Exemplo
                </h3>

                <p>
                    Vamos obter o nome do website.
                </p>

                <code class="language-php">echo "Nome do site: ". env("name");</code>

                <p>
                    Caso o valor da constante PROVIDER_NAME em config.php sejá
                    `Hospede`. O resultado sera:

                    <br>
                    <code class="language-php">Nome do site: Hospede</code>
                </p>

            </div>
        </div>
    </div>

</body>
</html>
