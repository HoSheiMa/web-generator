<?php

namespace App\Core\Classes;

use App\Core\Classes\Themes\Ubold;
use App\Models\Component as ComponentModel;
use App\Models\Page as ModelsPage;
use Illuminate\Support\Facades\File;
use Symfony\Component\CssSelector\Node\FunctionNode;

class page
{
    public $page_id = null;
    /**
     * @var array $rander_id unqie id for this rendering
     */
    public function __construct(public $content, public $folder, public $rander_id, public $page_name, public $theme = new Ubold, public $updateAttrFn = null)
    {
        $attrs = [
            'project_id' => $rander_id,
            "page_name" => $page_name,
        ];
        $page = ModelsPage::where($attrs)->first();
        if (!$page) {
            $page = ModelsPage::create($attrs);
        }
        $page->components->each(fn (ComponentModel $p) => $p->delete());
        $this->page_id = $page->id;
    }

    public function injectAssets()
    {
        File::copyDirectory(public_path() . $this->theme->themeURL, $this->folder . "/theme");
    }
    public function html($components)
    {
        $this->injectAssets();
        return "
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Document</title>
        {$this->theme->css()}
    </head>
    <body>
        {$components}
        {$this->theme->js()}
    </body>
</html>
        ";
    }

    /**
     * @var array $structure structure contain of pages structure for build it
     */
    public function build(&$structures)
    {
        $components = [];
        foreach ($structures as $component_index => $structure) {
            $component_name = $structure['name'];
            $components[] = (new Component(
                $this->content,
                $this->rander_id,
                $component_index,
                $component_name,
                $this->folder,
                $this->page_id,
                $this->theme
            ))->build($structure);
        }


        $config = [
            'indent'         => true,
            'output-xhtml'   => false,
            'show-body-only' => true,
            "drop-empty-elements" => false,
            "drop-empty-paras" => false,
        ];

        $__output = $this->html(collect($components)->join("\n"));
        if (env('APP_ENV') == "debug") {

            $tidy = new \tidy;
            $tidy->parseString($__output, $config, 'utf8');
            $tidy->cleanRepair();
            # write the render file
            File::put($this->folder . "/{$this->page_name}.php", (string)$tidy->root());
        } else {
            File::put($this->folder . "/{$this->page_name}.php", (string)$__output);
        }
    }
}
