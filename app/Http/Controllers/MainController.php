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
}
