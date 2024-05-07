<?php


namespace App\Core\Classes;

use App\Models\Project;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Schema
{
    static public function databaseToJson(Project $project)
    {
        $json = [];
        foreach ($project->pages as $page_index => $page) {
            $json[$page->page_name] = [];
            foreach ($page->components as $component_index => $component) {
                $json[$page->page_name][$component_index] = [];
                foreach ($component->attributes as $attribute_index => $attribute) {
                    $json[$page->page_name][$component_index][$attribute->attribute_name] = match ($attribute->attribute_type) {
                        "array" => json_decode($attribute->attribute_value, true),
                        "boolean" => (bool) ($attribute->attribute_value),
                        default => $attribute->attribute_value,
                    };
                }
                $json[$page->page_name][$component_index]['name'] = $component->component_name;
            }
        }
        return $json;
    }
    static function matchSchema($schema, $replace_schema)
    {
        $_ = [...$schema];
        $schema = collect($schema);
        $replace_schema = collect($replace_schema);
        // empty
        if ($replace_schema->count() == 0) return $schema;

        $schema->each(function ($page, $page_name) use (&$_, $replace_schema) {
            $page_updates = $replace_schema->get($page_name);
            if (!$page_updates) return;
            collect($page)->each(function ($component, $component_index) use (&$_, $page_name, $page_updates) {
                $component_name = collect($component)->get('name');
                $components_updates = collect($page_updates)->sole('name', $component_name);
                if (!$components_updates) return;
                $_[$page_name][$component_index] = [...$component, ...$components_updates];
            });
        });

        return $_;
    }
}
