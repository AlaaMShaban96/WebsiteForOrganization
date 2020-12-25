<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    public function index()
    {
        $projects=Project::all();
        return view('dashboard.project.index',compact('projects'));
    }
    public function store(ProjectRequest $request)
    {
        $request['image']=$this->uploadeImage($request);
        $request['user_id']=1;
        Project::create($request->all());
        Session::flash('message', 'تم إضافة المشروع بنجاح'); 
        return redirect('dashboard/project');
    }
    public function update(ProjectRequest $request ,Project $project)
    {
        $request['image']=isset($request->file)?$this->uploadeImage($request):$project->image;
        $project->update($request->all());
        Session::flash('message', 'تم تعديل المشروع بنجاح');
        return redirect()->back(); 
    }
    public function destroy(Project $project )
    {
      
        $project->image==null?"" : unlink($project->image);;
        $project->delete();

        Session::flash('message', 'تم حدف  المشروع بنجاح'); 
        return redirect('dashboard/project');
    }
    private function uploadeImage(Request $request)
    {
        
        $imageName = time().".png";

        $path ="storage/". $request->file('file')->storeAs('project/', $imageName, 'public');
    
        return $path;
    }
}
