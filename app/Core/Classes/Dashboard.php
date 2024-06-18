<?php

namespace App\Core\Classes;

use App\Core\Classes\Themes\Ubold;
use App\Models\Component as ComponentModel;
use App\Models\Page as ModelsPage;
use Illuminate\Support\Facades\File;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Dashboard
{

    public function __construct(public $project, public $project_folder, public $theme_class)
    {
    }

    public function inject()
    {
        $features_list = [
            'portfolio' => [
                'contactus'
            ],
            'ecommerce' => [
                'crm',
                'contactus',
                'orders',
                'products',
            ],
        ];

        $features = $features_list[$this->project->type];

        File::makeDirectory($this->project_folder . "/dashboard");

        // connection configs 
        File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/AUTH/configs.php"), $this->project_folder . "/dashboard/configs.php");

        // theme configs class
        $css = collect($this->theme_class->cssLinks)->map(fn ($link) => "<link href=\".$link\" rel=\"stylesheet\" type=\"text/css\" id=\"app-style\" />")->join("\n");
        $js =  collect($this->theme_class->jsLinks)->map(fn ($link) => "<script src=\".$link\"></script>")->join("\n");

        // index page
        File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/index.php"), $this->project_folder . "/dashboard/index.php");

        File::put($this->project_folder . "/dashboard/theme.php", "
            <?php
            \$theme_name = '{$this->theme_class->theme_name}';
            \$css = '{$css}';
            \$js = '{$js}';
        ");
        // Login (default)
        File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/AUTH/login.php"), $this->project_folder . "/dashboard/login.php");

        if (in_array('contactus', $features)) {
            File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/contactus.php"), $this->project_folder . "/dashboard/contactus.php");
        }
    }
}
