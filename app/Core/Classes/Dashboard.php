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
                'crm',
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

        // theme configs class
        File::put($this->project_folder . "/dashboard/theme.php", "
            <?php
            \$theme_name = '{$this->theme_class->theme_name}';
            \$css = '{$this->theme_class->css()}';
            \$js = '{$this->theme_class->js()}';
        ");
        // Login (default)
        File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/AUTH/login.php"), $this->project_folder . "/dashboard/login.php");

        if (in_array('crm', $features)) {
            // File::copyDirectory(, $this->project_folder . "/dashboard");
        }
    }
}
