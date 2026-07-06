<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('dashboard.projects.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        return view('dashboard.projects.show', compact('project'));
    }

    public function create()
    {
        return view('dashboard.projects.create');
    }

    public function store()
    {
        //Validation
        $request = request();

        $imagePath = null;
        if (request()->hasFile('image')) {

            $imagePath = request()
                ->file('image')
                ->store('projects', 'public');
        }

        $request->validate([
            'title' => 'required|min:3',
            'slug' => 'required|unique:projects',
        ]);
        //validation end

        Project::create([
            'title' => request('title'),
            'slug' => request('slug'),
            'description' => request('description'),
            'image' => $imagePath,
        ]);

        return redirect('/dashboard/projects');
    }

    public function edit($slug)
    {
        $project = Project::where(
            'slug',
            $slug
        )->firstOrFail();

        return view(
            'dashboard.projects.edit',
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

        //check the old image
        $imagePath = $project->image;

        if (request()->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }

            $imagePath = request()
                ->file('image')
                ->store('projects', 'public');
        }

        $project->update([
            'title' => request('title'),
            'slug' => request('slug'),
            'description' => request('description'),
            'image' => $imagePath,
        ]);

        return redirect(
            '/dashboard/projects/' . $project->slug
        );
    }

    //DELETE
    public function destroy($slug)
    {
        $project = Project::where(
            'slug',
            $slug
        )->firstOrFail();
        
        //Удаление картинки
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect('/dashboard/projects');
    }

}
