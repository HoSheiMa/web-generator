<?php

namespace App\Core\Components\Classes;

use App\Core\Classes\API\Pexels;
use App\Core\Classes\Assets;
use App\Models\Attribute;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;

class Demos
{
    public  function __construct(public $content, public $rander_id, public $component_name, public $folder, public $component_id, public $theme)
    {
    }
    public $structures;
    public function prepare(
        &$structures
    ) {
        $p = new Pexels;
        if (isset($structures['auto_generate']) && $structures['auto_generate']) {
            $max = isset($structures['max_auto_generate_items']) ? (int)$structures['max_auto_generate_items'] : 6;
            $images = $p->getImage("$this->content projects", $max ?? 3);
            $structures['demos']  = [];
            foreach ($images['photos'] as $key => $image) {
                $structures['demos'][] = [
                    'image_url' => $image['src']['landscape'],
                    'title' => $image['alt'],
                ];
            }

            $structures['auto_generate'] = false;
        }

        foreach ($structures['demos'] as $key => $value) {
            $image_path = (new Assets($this->folder))->saveFileFromURL($structures['demos'][$key]['image_url']);
            $structures['demos'][$key]['image_url'] = $image_path;
        }

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
        $component = File::get(base_path() . "/app/Core/Components/Templates/{$this->theme->theme_name}/{$this->component_name}.blade.php");
        return Blade::render(
            $component,
            $structures
        );
    }
}
