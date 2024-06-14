<?php


namespace App\Core\Classes;

use App\Core\Classes\Themes\Metronic;
use App\Core\Classes\Themes\Ubold;
use App\Models\Attribute as AttributeModel;
use App\Models\Component as ComponentModel;
use App\Models\Page as PageModel;
use App\Models\Project as ProjectModel;
use Illuminate\Support\Facades\File;

class Builder
{
    public $project;
    public $render_id;
    public $path;
    public $content;
    public function __construct(ProjectModel $project = null)
    {
        if ($project) {
            $this->project = $project;
            $this->render_id = $project->id;
        }
        // ?ENV=PRODUCTION
        // $this->render_id = uniqid();
        // ?ENV=DEBUG
        // !!! DEBUG Mode
        // // ProjectModel::all()->each(fn (ProjectModel $p) => $p->delete());
        // $this->render_id = 'debug65d0fed99a577';
        // $this->project  = ProjectModel::find($this->render_id);
        // !!!

        // clean up before rebuild
        // PageModel::where('project_id', $this->render_id)->each(fn (PageModel $p) => $p->delete());
        // PageModel::where('project_id', $this->project?->id)->each(fn (PageModel $p) => $p->delete());
        // ComponentModel::where('project_id', $this->render_id)->each(fn (ComponentModel $p) => $p->delete());
        // AttributeModel::where('project_id', $this->project?->id)->each(fn (AttributeModel $p) => $p->delete());

        if ($this->project) {
            $this->project->update([
                'status' => Utils::PENDING,
            ]);
        } else {
            if (!$this->render_id) {
                $this->render_id = uniqid();
            }
            $this->project = ProjectModel::create([
                'id' => $this->render_id,
                'name' => "project " . $this->render_id,
                "details" => "",
                "image_url" => "/metronic/media/svg/brand-logos/aven.svg",
                'type' => 'N/A',
                'user_id' => auth()->check() ? auth()->user()->id : '0',
                'theme_name' => (new Ubold)->theme_name,
                'status' => Utils::PENDING,
            ]);
        }

        $this->path = public_path() . '/Outputs/' . $this->render_id;
    }


    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }
    /**
     * @var array $structure structure contain of pages structure for build it
     */
    public function build($structures)
    {
        // ! clean the folder
        // ! this only for debuging the system
        // !!!!!!!!!!!!!!!!!!!
        File::deleteDirectories(public_path() . '/Outputs/');
        File::ensureDirectoryExists(public_path() . '/Outputs/');
        // !!!!!!!!!!!!!!!!!!!
        # generate unqie id for this rendering
        # create folder for save rendering files
        File::ensureDirectoryExists($this->path);
        # themes
        $themes = [
            "UBOLD" => new Ubold,
            "METRONIC" => new Metronic
        ];
        # generate each page one by one
        foreach ($structures as $page_name => $structure) {
            (new Page(
                $this->content,
                $this->path,
                $this->render_id,
                $page_name,
                $themes[$this->project->theme_name],
            ))->build($structure);
        }
        # inject Dashboard
        (new Dashboard($this->project, $this->path, $themes[$this->project->theme_name]))->inject();

        $this->project->update(['status' => Utils::READY]);
        return $this->render_id;
    }
}
