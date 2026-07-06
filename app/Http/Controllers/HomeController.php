<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\YoutubeService;
use App\Models\JournalEntry;
use App\Models\Project;



class HomeController extends Controller
{
    public function index(YoutubeService $youtube)
    {
        $title = "Radeon Vishnya";
        $subtitle = 'Разработчик, экспериментатор и человек, который пытается разобраться в жизни через код, игры и истории.';
        $subsubtitle = "Здесь лежат мои проекты, мысли, игры и попытки построить что-то настоящее.";

        $projects = Project::all();

        //Service Youtube
        $videos = $youtube->latestVideos();
        //journal
        $journals = JournalEntry::latest()
            ->take(3)
            ->get();
           

        return view('home', compact('title', 'subtitle', 'subsubtitle', 'projects', 'videos', 'journals'));
    }
}
