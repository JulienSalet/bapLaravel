<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticsController extends Controller
{
    const PATH_VIEW = 'app.entities.statics.';
    const CONTROLLER = 'App\StaticsController@';
    
    public function home(Request $request)
    {
        return view(self::PATH_VIEW . 'home')->with([
        
        ]);
    }
}
