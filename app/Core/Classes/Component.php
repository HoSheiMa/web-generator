<?php

namespace App\Core\Classes;

use App\Core\Components\Classes\ClientsSide;
use App\Core\Components\Classes\ContactUs;
use App\Core\Components\Classes\Demos;
use App\Core\Components\Classes\Features;
use App\Core\Components\Classes\Footer;
use App\Core\Components\Classes\HomeStart;
use App\Core\Components\Classes\Navbar;
use App\Core\Components\Classes\ProductCards;
use App\Models\Component as ModelsComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;

class Component
{
    protected $components = [];
    /**
     * @var array $rander_id unqie id for this rendering
     */
    public function __construct(
        public $content,
        public $rander_id,
        public $component_index,
        public $component_name,
        public $folder,
        public $page_id,
        public $theme
    ) {
        $component_model = ModelsComponent::create([
            "component_name" => $component_name,
            "order_in_list" => $component_index,
            "page_id" => $page_id
        ]);
        $component_id = $component_model->id;
        $this->components = [
            "navbar" => new Navbar($content, $rander_id, $component_name, $folder, $component_id, $theme),
            "home-start" => new HomeStart($content, $rander_id, $component_name, $folder, $component_id, $theme),
            "clients-side" => new ClientsSide($content, $rander_id, $component_name, $folder, $component_id, $theme),
            "features" => new Features($content, $rander_id, $component_name, $folder, $component_id, $theme),
            "demos" => new Demos($content, $rander_id, $component_name, $folder, $component_id, $theme),
            "contactus" => new ContactUs($content, $rander_id, $component_name, $folder, $component_id, $theme),
            "footer" => new Footer($content, $rander_id, $component_name, $folder, $component_id, $theme),
            'product-cards' => new ProductCards($content, $rander_id, $component_name, $folder, $component_id, $theme),
        ];
    }
    /**
     * @var array $structure structure contain of pages structure for build it
     */
    public function build(&$structure): string
    {
        return $this->components[$this->component_name]->prepare(
            $structure
        )->toHTML();
    }
}
