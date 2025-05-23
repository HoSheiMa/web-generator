<?php


namespace App\Core\Components\Classes;

use App\Models\Attribute;
use ErrorException;
use Exception;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;

class Orders
{
    public  function __construct(public $content, public $rander_id, public $component_name, public $folder, public $component_id, public $theme)
    {
    }
    public $structures;
    public function prepare(
        &$structures
    ) {
        $this->structures = $structures;
        foreach ($structures as $structure_key => $structure_value) {
            Attribute::create([
                "component_id" => $this->component_id,
                "attribute_type" => gettype($structure_value),
                "attribute_name" => $structure_key,
                "attribute_value" => match (gettype($structure_value)) {
                    'array' => json_encode($structure_value),
                    "string" => $structure_value,
                    "integer" => $structure_value,
                    default => $structure_value
                },
            ]);
        }

        return $this;
    }
    public function toHTML()
    {
        $structures = $this->structures;
        // inject backend api (needed)
        File::copyDirectory(app_path() . "/Core/Components/backend/cart", $this->folder . "/api/cart");
        File::copyDirectory(app_path() . "/Core/Components/backend/order", $this->folder . "/api/order");
        // throw_if(!isset($structures['title']), 'RuntimeException', json_encode($structures));
        $component = File::get(base_path() . "/app/Core/Components/Templates/{$this->theme->theme_name}/{$this->component_name}.blade.php");
        return Blade::render(
            $component,
            $structures
        );
    }
}
