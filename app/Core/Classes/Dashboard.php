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
                'users',
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
        $cssdeep = collect($this->theme_class->cssLinks)->map(fn ($link) => "<link href=\"../.$link\" rel=\"stylesheet\" type=\"text/css\" id=\"app-style\" />")->join("\n");
        $jsdeep =  collect($this->theme_class->jsLinks)->map(fn ($link) => "<script src=\"../.$link\"></script>")->join("\n");

        // index page
        File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/index.php"), $this->project_folder . "/dashboard/index.php");

        File::put($this->project_folder . "/dashboard/theme.php", "
            <?php
            \$theme_name = '{$this->theme_class->theme_name}';
            \$css = '$css';
            \$js = '$js';
            \$cssdeep = '$cssdeep';
            \$jsdeep = '$jsdeep';
        ");
        // Login (default)
        File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/AUTH/login.php"), $this->project_folder . "/dashboard/login.php");
        // register (default)
        File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/AUTH/register.php"), $this->project_folder . "/dashboard/register.php");
        // sidebar (default)
        File::makeDirectory($this->project_folder . "/dashboard/components");
        File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/components/sidebar.php"), $this->project_folder . "/dashboard/components/sidebar.php");

        if (in_array('contactus', $features)) {
            File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/contactus.php"), $this->project_folder . "/dashboard/contactus.php");
        }
        if (in_array('users', $features)) {
            File::makeDirectory($this->project_folder . "/dashboard/users");
            File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/users/index.php"), $this->project_folder . "/dashboard/users/index.php");
            File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/users/edit.php"), $this->project_folder . "/dashboard/users/edit.php");
        }
        if (in_array('orders', $features)) {
            File::makeDirectory($this->project_folder . "/dashboard/orders");
            File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/orders/index.php"), $this->project_folder . "/dashboard/orders/index.php");
            File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/orders/update.php"), $this->project_folder . "/dashboard/orders/update.php");
            File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/orders/delete.php"), $this->project_folder . "/dashboard/orders/delete.php");
        }
        if (in_array('products', $features)) {
            File::makeDirectory($this->project_folder . "/dashboard/products");
            File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/products/index.php"), $this->project_folder . "/dashboard/products/index.php");
            File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/products/create.php"), $this->project_folder . "/dashboard/products/create.php");
            File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/products/delete.php"), $this->project_folder . "/dashboard/products/delete.php");
            File::copy(app_path("Core/Components/Dashboard/{$this->theme_class->theme_name}/products/edit.php"), $this->project_folder . "/dashboard/products/edit.php");
        }
    }
}
