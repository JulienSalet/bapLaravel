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
    
    public function showGaleries(Request $request)
    {
        return view(self::PATH_VIEW . 'galeries')->with([
    
        ]);
    }
    
    public function showLogement(Request $request)
    {
        return view(self::PATH_VIEW . 'temoignages')->with([
    
        ]);
    }
    
    public function showReservation(Request $request)
    {
        return view(self::PATH_VIEW . 'reservations.create')->with([
    
        ]);
    }
    
    public function showAcces(Request $request)
    {
        return view(self::PATH_VIEW . 'access')->with([
        
        ]);
    }
}
