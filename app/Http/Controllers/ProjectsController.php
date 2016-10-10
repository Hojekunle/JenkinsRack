<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('projects.index');
    }

    public function Endex()
    {
        $projects = Project::all();
        return $projects;	
    }

    public function store()
    {
        $input = Input::get('text');
    
        $project = new Project;
        $project->text = $input;
        $project->save();
            
        if($project)
            return $project->id;
        else
            return 0;
    
    }

    public function destroy($id)
    {
        $item = Item::find($id);

        if(!$item)
            return false;
        
        $item->delete();
    }

    
    //
}
