<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
    public function index()
    {
        $employs=Team::where('titel','موظف')->get();
        $bossies=Team::where('titel','مدير')->get();
        return view('dashboard.team.index',compact('employs','bossies'));
    }
    public function store(TeamRequest $request)
    {
        $request['image']=$this->uploadeImage($request);
        Team::create($request->all());
        Session::flash('message', 'تم إضافة الموظف بنجاح'); 
        return redirect('dashboard/team');
    }
    public function update(TeamRequest $request , Team $team )
    {   
        $request['image']=isset($request->file)?$this->uploadeImage($request):$team->image;
        $team->update($request->all());
        Session::flash('message', 'تم تعديل بيانات  الموظف بنجاح'); 

        return redirect()->back();
    }
    public function destroy(Team $team )
    {
      
        $team->image==null?"" : unlink($team->image);;
        $team->delete();

        Session::flash('message', 'تم حدف  الموظف بنجاح'); 
        return redirect('dashboard/team');
    }
    private function uploadeImage(Request $request)
    {
        
        $imageName = time().".png";

        $path ="storage/". $request->file('file')->storeAs('team/', $imageName, 'public');
    
        return $path;
    }

}
