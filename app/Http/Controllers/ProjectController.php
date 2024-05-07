<?php

namespace App\Http\Controllers;

use App\Core\Classes\Themes\Ubold;
use App\Core\Classes\Utils;
use App\Export\Zip;
use App\Models\Project;
use App\Models\User;
use App\ProjectSchema\Ecommerce;
use App\ProjectSchema\Portfolio;
use Illuminate\Http\Request;
use Response;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', [
            "projects" => Project::where('user_id', auth()->user()->id)->paginate(9)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->available_projects  == 0) return redirect('payment');
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (auth()->user()->available_projects  == 0) return redirect('payment');

        $form = $request->validate(
            [
                'name' => "required|max:255",
                "details" => "required|max:2048",
                "avatar " => "image|mimes:png,jpg,jpeg",
                'theme' => "required",
                "type" => "required",
            ]
        );

        if (!in_array($form['type'], ['portfolio', 'ecommerce'])) return;
        if (!in_array($form['theme'], ['metronic', 'ubold'])) return;


        $themes = [
            'metronic' => null,
            'ubold' => Ubold::class,
        ];

        $types = [
            'portfolio' => Portfolio::class,
            'ecommerce' => Ecommerce::class
        ];

        $path = $request->avatar->store('public/images');
        $path = "/" . str_replace("public", "storage", $path);
        $form['avatar'] = $path;

        $name = $form['name'];
        $type = $types[$form['type']];
        $theme = $themes[$form['theme']];

        // TODO: should go to AI to translate and come back to inject with this project params
        $brief = []; // $form['details'];
        $content = $name; // form now test v1

        $project = Project::create([
            'id' => 'live' . uniqid(),
            'name' => $form['name'],
            'details' => $form['details'],
            'theme_name' => (new $theme)->theme_name,
            'user_id' => auth()->user()->id,
            'status' => Utils::READY,
            "image_url" => $form['avatar'],
            "type" => $form['type'],
        ]);

        $id = (new $type($project))->build($content, $brief);

        $user = User::find(auth()->user()->id);
        if ($user) $user->decrement('available_projects');



        return redirect('/projects/' . $project->id . '/success');
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
        return Response::download($full_file_path, $file_name);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if ($project->user_id != auth()->user()->id) return redirect('/');
        $project->delete();
        return back();
    }


    public function success(Request $request, Project $project)
    {
        return view('projects.success')->with('project', $project);
    }
}
