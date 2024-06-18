<?php

namespace App\Core\Classes\Themes;

$theme_name = 'Metronic';
class Metronic
{
    public  $cssLinks = [
        // extras
        "./theme/plugins/custom/datatables/datatables.bundle.css",
        "./theme/plugins/custom/vis-timeline/vis-timeline.bundle.css",
        // normal
        "./theme/plugins/global/plugins.bundle.css",
        "./theme/css/style.bundle.css",
        "./theme/css/stylee.css",
    ];
    public  $jsLinks = [
        "./theme/plugins/global/plugins.bundle.js",
        "./theme/js/scripts.bundle.js",
        "./theme/plugins/custom/fslightbox/fslightbox.bundle.js",
        "./theme/plugins/custom/typedjs/typedjs.bundle.js",
        "./theme/js/custom/landing.js",
        "./theme/js/custom/pages/pricing/general.js",
        // extras
        "./theme/plugins/custom/datatables/datatables.bundle.js",
        "./theme/plugins/custom/vis-timeline/vis-timeline.bundle.js",
        "./theme/js/widgets.bundle.js",
        "./theme/js/custom/widgets.js",
        "./theme/js/custom/apps/chat/chat.js",
        "./theme/js/custom/utilities/modals/upgrade-plan.js",
        "./theme/js/js/custom/utilities/modals/create-app.js",
        "./theme/js/custom/utilities/modals/upgrade-plan.js",
        "./theme/js/custom/utilities/modals/create-campaign.js",
        "./theme/js/custom/utilities/modals/users-search.js",

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
