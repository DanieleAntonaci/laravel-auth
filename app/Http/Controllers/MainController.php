<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $projects= Project::all();
        return view('pages.index', compact('projects'));
    }

    public function dashboard(){
        $projects= Project::all();
        return view('pages.dashboard', compact('projects'));
    }

    public function projectShow(Project $project){
        return view('pages.projectShow', compact('project'));
    }
    public function projectGuestShow(Project $project){
        return view('pages.projectGuestShow', compact('project'));
    }
    public function projectDestroy(Project $project){
        $project->delete();
        return redirect()-> route('dashboard');
    }

    public function projectCreate(){
        return view('pages.projectCreate');
    }

    public function projectStore(Request $request){
        $data= $request->validate([
            'name' => 'required|string|unique:projects,name|max:64',
            'description' => 'string',
            'main_image' => 'required|unique:projects,main_image',
            'release_date' => 'required|date|before:today',
            'repo_link' => 'required|unique:projects,repo_link',
        ]);

        $project = new Project();

        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> main_image = $data['main_image'];
        $project -> release_date = $data['release_date'];
        $project -> repo_link = $data['repo_link'];

        $project->save();

        return redirect()->route('dashboard');
    }
}
