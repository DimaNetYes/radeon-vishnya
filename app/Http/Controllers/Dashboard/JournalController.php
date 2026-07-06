<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JournalEntry;
use Illuminate\Support\Facades\Storage;
use Cocur\Slugify\Slugify;


class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journals = JournalEntry::latest()->get();

        return view('dashboard.journal.index', compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.journal.create', [

            'journal' => new JournalEntry()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        request()->validate([
            'title' => 'required|min:3',
            'excerpt' => 'required',
            'content' => 'required',
            'image' => 'nullable|image',
        ]);

        $imagePath = null;

        if (request()->hasFile('image')) {

            $imagePath = request()
                ->file('image')
                ->store('journal', 'public');
        }

        //translitaration from russian to english
        $slugify = new Slugify();
        $slug = $slugify->slugify(request('title'));
        //if there are two identical articles, then fitst_title to first_title2
        $originalSlug = $slug;
        $i = 2;
        while (JournalEntry::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $i;
            $i++;
        }

        JournalEntry::create([

            'title' => request('title'),

            'slug' => $slug,

            'excerpt' => request('excerpt'),

            'content' => request('content'),

            'image' => $imagePath,

            'published_at' => now(),

        ]);


        return redirect('/dashboard/journal');

    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $journal = JournalEntry::where(
            'slug',
            $slug
        )->firstOrFail();

        return view(
            'dashboard.journal.show',
            compact('journal')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $journal = JournalEntry::where(
            'slug',
            $slug
        )->firstOrFail();

        return view(
            'dashboard.journal.edit',
            compact('journal')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($slug)
    {
        $journal = JournalEntry::where(
            'slug',
            $slug
        )->firstOrFail();

        request()->validate([
            'title' => 'required|min:3',
            'excerpt' => 'required',
            'content' => 'required',
            'image' => 'nullable|image',
        ]);

        $imagePath = $journal->image;

        if (request()->hasFile('image')) {

            if ($journal->image) {

                Storage::disk('public')->delete($journal->image);

            }

            $imagePath = request()
                ->file('image')
                ->store('journal', 'public');
        }

        //translitaration from russian to english
        $slugify = new Slugify();
        $slug = $slugify->slugify(request('title'));
        //if there are two identical articles, then fitst_title to first_title2
        $originalSlug = $slug;
        $i = 2;
        while (JournalEntry::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $i;
            $i++;
        }

        $journal->update([

            'title' => request('title'),

            'slug' => $slug,

            'excerpt' => request('excerpt'),

            'content' => request('content'),

            'image' => $imagePath,

        ]);

        return redirect('/dashboard/journal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $journal = JournalEntry::where(
            'slug',
            $slug
        )->firstOrFail();

        if ($journal->image) {

            Storage::disk('public')->delete($journal->image);

        }

        $journal->delete();

        return redirect('/dashboard/journal');
    }
}
