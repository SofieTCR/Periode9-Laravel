<?php

namespace App\Http\Controllers\Open;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function Index() {
        $projects = Project::paginate(10);
        return view('open.projects.index', compact('projects'));
    }
}
