<?php

namespace App\Core\Classes;

use App\Core\Components\Classes\ClientsSide;
use App\Core\Components\Classes\ContactUs;
use App\Core\Components\Classes\Demos;
use App\Core\Components\Classes\Features;
use App\Core\Components\Classes\Footer;
use App\Core\Components\Classes\HomeStart;
use App\Core\Components\Classes\Navbar;
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
        public $page_id
    ) {
        $component_model = ModelsComponent::create([
            "component_name" => $component_name,
            "order_in_list" => $component_index,
            "page_id" => $page_id
        ]);
        $component_id = $component_model->id;
        $this->components = [
            "navbar" => new Navbar($content, $rander_id, $component_name, $folder, $component_id),
            "home-start" => new HomeStart($content, $rander_id, $component_name, $folder, $component_id),
            "clients-side" => new ClientsSide($content, $rander_id, $component_name, $folder, $component_id),
            "features" => new Features($content, $rander_id, $component_name, $folder, $component_id),
            "demos" => new Demos($content, $rander_id, $component_name, $folder, $component_id),
            "contactus" => new ContactUs($content, $rander_id, $component_name, $folder, $component_id),
            "footer" => new Footer($content, $rander_id, $component_name, $folder, $component_id),
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
