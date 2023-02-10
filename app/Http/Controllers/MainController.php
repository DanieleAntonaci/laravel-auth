<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

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
            'main_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'release_date' => 'required|date|before:tomorrow',
            'repo_link' => 'required|unique:projects,repo_link',
        ]);

        $img_path = Storage::put('uploads', $data['main_image']);
        $data['main_image'] = $img_path;

        $project = new Project();

        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> main_image = $data['main_image'];
        $project -> release_date = $data['release_date'];
        $project -> repo_link = $data['repo_link'];


        $project->save();

        return redirect()->route('dashboard');
    }

    public function projectEdit(Project $project ){
        return view('pages.editProject', compact('project'));
    }

    public function projectUpdate(Request $request, Project $project){
        $data= $request->validate([
            'name' => 'required|string|max:64|unique:projects,name,' . $project -> id,
            'description' => 'string',
            'main_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'release_date' => 'required|date|before:tomorrow',
            'repo_link' => 'required|unique:projects,repo_link,' . $project -> id,
        ]);

        $img_path = Storage::put('uploads', $data['main_image']);
        $data['main_image'] = $img_path;

        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> main_image = $data['main_image'];
        $project -> release_date = $data['release_date'];
        $project -> repo_link = $data['repo_link'];

        $project->save();

        return redirect()->route('dashboard');
    }
}
