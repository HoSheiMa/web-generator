<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function index(Request $request,  Project $project)
    {
        if (auth()->user()->id != $project->user_id) return redirect('/');
        return view('studio')->with('project', $project);
    }
}
