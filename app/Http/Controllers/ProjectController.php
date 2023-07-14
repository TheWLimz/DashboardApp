<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
  public function get_all_projects(){
    $projects = Project::with('customers')->latest()->get();


    return view('dashboard',['projects' => $projects]);
  }

  public function delete_project($id){
    $project = Project::where('id', $id)->firstOrFail()->delete();
    echo ("Successfully Deleted a Project");
    return redirect()->back();
  }

  public function add_project(Request $request){
    $project = new Project();

    $project->customer_id = $request->customer_id;
    $project->status = $request->status;
    $project->project_name = $request->project_name;
    $project->project_description = $request->project_description;
    $project->save();

    return redirect('/');

  }
}
