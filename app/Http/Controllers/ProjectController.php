<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('welcome', compact('projects'));
    }
    public function create(){
        return view('pages.home');
    }
    public function store(Request $request){
        $store = new Project();
        $store -> name = $request -> name;
        $store -> date = $request -> date;
        $store -> description = $request -> description;
        $store -> url = $request -> url;
        $store -> timestamps = $request -> timestamps;

        $store -> save();
        return redirect('/');
    }
}
