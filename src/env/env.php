<?php

    /**
     * Verifica sé a função env existe.
     */
    if (!function_exists("env"))
    {
        /**
         * Essa função busca e devolve uma variavel de
         * ambiente de forma global.
         * 
         * @param string $name O nome da variavel de ambiente.
         * @return string O valor da variavel de ambiente.
         */
        function env($attribute)
        {
            if ($attribute == "name")
            {
                return PROVIDER_NAME;
            }

            if ($attribute == "url")
            {
                return PROVIDER_URL;
            }

            if ($attribute == "lang")
            {
                return PROVIDER_LANGUAGE;
            }
        }
    }
