<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Cocur\Slugify\Slugify; //translitaration slug

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
        return view('dashboard.projects.create', [

            'project' => new Project()

        ]);
    }

    public function store()
    {
        //Validation
        $request = request();
    
        //Slugify
        $slugify = new Slugify();
        $slug = $slugify->slugify(request('title'));
        $originalSlug = $slug;
        $i = 2;
        while (Project::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $i;
            $i++;
        }
        //ENDSlugify

        $imagePath = null;
        if (request()->hasFile('image')) {

            $imagePath = request()
                ->file('image')
                ->store('projects', 'public');
        }

        $request->validate([
            'title' => 'required|min:3',
        ]);
        //validation end

        Project::create([
            'title' => request('title'),
            'slug' => $slug,
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

        //Slugify
        $slugify = new Slugify();
        $slug = $slugify->slugify(request('title'));
        $originalSlug = $slug;
        $i = 2;
        while (Project::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $i;
            $i++;
        }
        //ENDSlugify

        $project->update([
            'title' => request('title'),
            'slug' => $slug,
            'description' => request('description'),
            'image' => $imagePath,
            'telegram_url' => request('telegram_url'),
            'github_url' => request('github_url'),
            'demo_url' => request('demo_url'),
            'apk_url' => request('apk_url'),
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
