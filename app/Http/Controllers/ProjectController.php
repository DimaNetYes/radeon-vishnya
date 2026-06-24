<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        //Validation
        $request = request();

        $request->validate([
            'title' => 'required|min:3',
            'slug' => 'required|unique:projects',
        ]);
        //validation end

        Project::create([
            'title' => request('title'),
            'slug' => request('slug'),
            'description' => request('description'),
        ]);

        return redirect('/projects');
    }

    public function edit($slug)
    {
        $project = Project::where(
            'slug',
            $slug
        )->firstOrFail();

        return view(
            'projects.edit',
            compact('project')
        );
    }

    public function update($slug)
    {
        $project = Project::where(
            'slug',
            $slug
        )->firstOrFail();

        request()->validate([
            'title' => 'required|min:3',
            'slug' => 'required',
        ]);

        $project->update([
            'title' => request('title'),
            'slug' => request('slug'),
            'description' => request('description'),
        ]);

        return redirect(
            '/projects/' . $project->slug
        );
    }

    //DELETE
    public function destroy($slug)
    {
        $project = Project::where(
            'slug',
            $slug
        )->firstOrFail();

        $project->delete();

        return redirect('/projects');
    }

}
