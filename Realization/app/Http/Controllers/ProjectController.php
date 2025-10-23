<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProjectService;

class ProjectController extends Controller
{
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    public function index()
    {
        $projects = $this->projectService->getAllProjects();
        return view('projects.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = $this->projectService->getProjectBySlug($slug);

        if (!$project) {
            abort(404);
        }

        return view('projects.show', compact('project'));
    }
}
