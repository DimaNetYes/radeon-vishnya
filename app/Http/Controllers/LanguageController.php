<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch($locale)
    {
        if (!in_array($locale, ['ru', 'en', 'de'])) {
            abort(404);
        }

        session()->put('locale', $locale);

        return back();
    }
}
