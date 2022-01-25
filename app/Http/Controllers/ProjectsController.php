<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ProjectsController extends Controller
{
    public function getProjects()
    {
        return view('projects');
    }
}
