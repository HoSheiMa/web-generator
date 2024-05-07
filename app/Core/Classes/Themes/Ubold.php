<?php


namespace App\Core\Classes\Themes;

class Ubold
{
    public  $cssLinks = [
        "./theme/css/bootstrap.min.css",
        "./theme/css/materialdesignicons.min.css",
        "./theme/css/style.css"
    ];
    public  $jsLinks = [
        "./theme/js/jquery.min.js",
        "./theme/js/bootstrap.bundle.min.js",
        "./theme/js/jquery.easing.min.js",
        "./theme/js/scrollspy.min.js",
        "./theme/js/app.js",
    ];

    public $themeURL = "/ubold";
    public $theme_name = "UBOLD";
    public function css()
    {
        return collect($this->cssLinks)->map(fn ($link) => "<link href=\"$link\" rel=\"stylesheet\" type=\"text/css\" id=\"app-style\" />")->join("\n");
    }
    public function js()
    {
        return collect($this->jsLinks)->map(fn ($link) => "<script src=\"$link\"></script>")->join("\n");
    }
}
