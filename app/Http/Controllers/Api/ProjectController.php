<?php

namespace App\Http\Controllers\Api;

use App\Core\Classes\Themes\Metronic;
use App\Core\Classes\Themes\Ubold;
use App\Core\Classes\Utils;
use App\Export\Zip;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProjectController as ControllersProjectController;
use App\Models\Project;
use App\Models\User;
use App\ProjectSchema\METRONIC\Ecommerce as METRONICEcommerce;
use App\ProjectSchema\METRONIC\Portfolio as METRONICPortfolio;
use App\ProjectSchema\UBOLD\Ecommerce as UBOLDEcommerce;
use App\ProjectSchema\UBOLD\Portfolio as UBOLDPortfolio;
use Illuminate\Http\Request;
use Response;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        return Project::where('user_id', auth('api')->user()->id)->get();
    }

    public function find(Project $project)
    {
        if ($project && $project->user_id == auth('api')->user()->id) {
            return $project;
        } else {
            return null;
        }
    }


    public function create(Request $request)
    {
        (new ControllersProjectController)->store($request);

        return ['error' => false, "message" => "Created Successfully."];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function export(Project $project)
    {
        $zip = new Zip;
        $file_name = $project->id . '-' . $project->updated_at . '.zip';
        $full_file_path = public_path() . '/Outputs/' . $file_name;
        // dd($full_file_path);

        $zip->create(
            public_path() . "/Outputs/$project->id",
            public_path() . '/Outputs',
            $file_name
        );

        return [
            "url" => url('/') . "/Outputs/$file_name"
        ];
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        (new ControllersProjectController)->destroy($project);
        return ["error" => false, "message" => "deleted successfully."];
    }
}
