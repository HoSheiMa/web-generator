<?php

namespace App\Core\Classes\Themes;

$theme_name = 'Metronic';
class Metronic
{
    public  $cssLinks = [
        "./theme/plugins/global/plugins.bundle.css",
        "./theme/css/style.bundle.css",
        "./theme/css/stylee.css"
    ];
    public  $jsLinks = [
        "./theme/plugins/global/plugins.bundle.js",
        "./theme/js/scripts.bundle.js",
        "./theme/plugins/custom/fslightbox/fslightbox.bundle.js",
        "./theme/plugins/custom/typedjs/typedjs.bundle.js",
        "./theme/js/custom/landing.js",
        "./theme/js/custom/pages/pricing/general.js",
    ];

    public $themeURL = "/metronic";
    public $theme_name = "METRONIC";
    public function css()
    {
        return collect($this->cssLinks)->map(fn ($link) => "<link href=\"$link\" rel=\"stylesheet\" type=\"text/css\" id=\"app-style\" />")->join("\n");
    }
    public function js()
    {
        return collect($this->jsLinks)->map(fn ($link) => "<script src=\"$link\"></script>")->join("\n");
    }
}
