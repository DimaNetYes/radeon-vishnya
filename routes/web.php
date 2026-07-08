<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JournalEntryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Dashboard\ProjectController as DashboardProjectController;
use App\Http\Controllers\Dashboard\JournalController as DashboardJournalController;
use App\Http\Controllers\LanguageController;

Route::get('/', function () {
    return view('welcome');
});
// Admin Panel
Route::middleware('auth')
    ->prefix('dashboard')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('projects', DashboardProjectController::class);
        Route::resource('journal', DashboardJournalController::class);

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    });

require __DIR__ . '/auth.php';


Route::get('/', [HomeController::class, 'index']);

Route::view('/projects', 'projects');
Route::view('/journal', 'journal');
Route::view('/about', 'about');
Route::view('/youtube', 'youtube');

//PROJECTS
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{slug}', [ProjectController::class, 'show']);

// Route::get('/projects/create', [ProjectController::class, 'create']);
// Route::post('/projects', [ProjectController::class, 'store']);

//update
// Route::get(
//     '/projects/{slug}/edit',
//     [ProjectController::class, 'edit']
// );

// Route::patch(
//     '/projects/{slug}',
//     [ProjectController::class, 'update']
// );
//update end
//DELETE
// Route::delete(
//     '/projects/{slug}',
//     [ProjectController::class, 'destroy']
// );
//END DELETE

// Journal 
Route::get('/journal', [JournalEntryController::class, 'index']);

Route::get('/journal/{slug}', [JournalEntryController::class, 'show']);

//Localization
Route::get('/language/{locale}', [LanguageController::class, 'switch']);


