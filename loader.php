<?php

    /**
     * Esse script é um gerenciador de dependencias,
     * ele serve para carregar todas as dependencias
     * do website. Todos os scripts do site, devem
     * chamar esse script no inicio.
     */

    /**
     * Configurações do website.
     */
    include __DIR__ . "/config.php";

    /**
     * Método env.
     */
    include __DIR__ . "/src/env/env.php";
