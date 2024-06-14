<?php


namespace App\Core\Components\Classes;

use App\Core\Classes\API\Pexels;
use App\Core\Classes\Assets;
use App\Models\Attribute;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeStart
{
    public $structures;
    public  function __construct(public $content, public $rander_id, public $component_name, public $folder, public $component_id, public $theme)
    {
    }
    public function prepare(
        &$structures
    ) {
        $p = new Pexels;

        info('cover info:');
        info($p->getImage("$this->content cover", 1));
        if (isset($structures['auto_generate']) && $structures['auto_generate']) {
            $guess = random_int(0, 1);
            info($this->content);
            if ($guess) {

                $src = $p->getImage("$this->content cover", 1)['photos'][0]['src']['landscape'];
                // save the image to assets <START>
                $image_path = (new Assets($this->folder))->saveFileFromURL($src);
                // save the image to assets <END>
                $structures["background_image"] = $image_path;
                $structures["background_color"] = null;
            } else {
                $structures["background_image"] = null;
                $structures["background_color"] = "background: linear-gradient(to left, #673ab7, #3e1e8c);";
            }
            $structures['auto_generate'] = false;
        } else {
            if (isset($structures["background_image"]) && $structures["background_image"] != "") {
                (new Assets($this->folder))->saveFileFromURL($structures["background_image"]);
            }
        }
        if (!isset($structures['sub_images']) || count($structures['sub_images']) == 0) {
            $src = $p->getImage("$this->content cinematic", 3);
            $first  = (new Assets($this->folder))->saveFileFromURL($src['photos'][0]['src']['portrait']);;
            $second = (new Assets($this->folder))->saveFileFromURL($src['photos'][1]['src']['portrait']);;
            $third  = (new Assets($this->folder))->saveFileFromURL($src['photos'][2]['src']['portrait']);;
            $structures['sub_images'] = [$first, $second, $third];
        } else {
            foreach ($structures['sub_images'] as $sub_image) {
                (new Assets($this->folder))->saveFileFromURL($sub_image);
            }
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
