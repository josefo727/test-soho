<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectCollection;

class ProjectController extends Controller
{
    /**
     * @param Request $request
     * @return ProjectCollection
     */
    public function index(Request $request): ProjectCollection
    {
        $search = $request->get('search', '');

        $projects = Project::search($search)
            ->inRandomOrder()
            ->paginate(15);

        return new ProjectCollection($projects);
    }
}
