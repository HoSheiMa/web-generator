<?php

namespace App\Core\Components\Classes;

use App\Models\Attribute;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;

class ContactUs
{
    public  function __construct(public $content, public $rander_id, public $component_name, public $folder, public $component_id)
    {
    }

    public function submitFormPhpCode()
    {
        return '';
    }
    public function injectPHP($html)
    {
        return str_replace('PHP_SCRIPT_FORM_SUBMIT', $this->submitFormPhpCode(), $html);
        return $html;
    }

    public $structures;
    public function prepare(
        &$structures
    ) {
        // ? inject backend for contactus component
        File::copyDirectory(app_path() . "/Core/Components/backend/{$this->component_name}", $this->folder . "/api");

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
        return $this->injectPHP(Blade::render(
            $component,
            $structures
        ));
    }
}
