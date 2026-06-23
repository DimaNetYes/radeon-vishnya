<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Radeon Vishnya";
        $subtitle = 'Разработчик, экспериментатор и человек, который пытается разобраться в жизни через код, игры и истории.';
        $subsubtitle = "Здесь лежат мои проекты, мысли, игры и попытки построить что-то настоящее.";

        $projects = Project::all();

        return view('home', compact('title', 'subtitle', 'subsubtitle', 'projects'));
    }
}
