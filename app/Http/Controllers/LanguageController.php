<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function change($lang)
    {
        if(!in_array($lang, ['id', 'en'])){
            return abort(404);
        }

        App::setlocale($lang);
        session()->put('locale', $lang);

        return back();
    }
}
