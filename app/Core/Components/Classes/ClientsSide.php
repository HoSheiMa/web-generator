<?php

namespace App\Core\Components\Classes;

use App\Models\Attribute;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;

class ClientsSide
{
    public  function __construct(public $content, public $rander_id, public $component_name, public $folder, public $component_id)
    {
    }
    public $structures;
    public function prepare(
        &$structures
    ) {
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
        $this->structures = $structures;
        return $this;
    }
    public function toHTML()
    {
        $structures = $this->structures;

        $component = File::get(base_path() . "/app/Core/Components/Templates/{$this->component_name}.blade.php");
        return Blade::render(
            $component,
            $structures
        );
    }
}