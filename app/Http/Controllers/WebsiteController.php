<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Project;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $projects= Project::orderBy('id')->take(5)->get();
        $teams=Team::where('titel', 'مدير')->get();
        return view('website.index',compact('projects','teams'));
    }
    public function team()
    {
        # code...
    }
    public function member()
    {
        # code...
    }
    public function about()
    {
        # code...
    }
}
