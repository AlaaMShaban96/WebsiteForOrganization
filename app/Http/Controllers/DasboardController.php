<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DasboardController extends Controller
{
    public function index()
    {
        $projects=Project::all();
        $teams=Team::all();
        return view('dashboard.index',compact('projects','teams'));
    }
}
