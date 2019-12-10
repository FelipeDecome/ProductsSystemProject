<?php

namespace FelipeDecome\ProductSystem\config;

class ProjectConfig
{

    /**
     * [Pt-Br]
     * Habilita o modo de Desenvolvedor está ativo
     *
     * [En-Us]
     * Enable Developer Mode
     */
    public const DEV_MODE = true;

    /**
     * [Pt-Br]
     * Define se todos os erros serão exibidos.
     * Por padrão é ativada junto com o Modo de Desenvolvedor.
     *
     * [En-Us]
     * Enable Full Debug Mode(All the info about the error will be shown).
     * It is enabled with Developer Mode by Default.
     */
    public const FULL_DEBUG = self::DEV_MODE;

    /**
     * [Pt-Br]
     * Caminhos
     *
     * [En-Us]
     * Paths
     */
    public const PATH_BSTRAP_CSS = __DIR__ . '/vendor/twbs/bootstrap/dist/css/';
    public const PATH_BSTRAP_JS = __DIR__ . '/vendor/twbs/bootstrap/dist/js/';
    public const PATH_JQUERY = __DIR__ . '/vendor/components/jquery/';
}
